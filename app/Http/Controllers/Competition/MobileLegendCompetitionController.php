<?php

namespace App\Http\Controllers\Competition;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMobileLegendRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateMobileLegendRequest;
use App\Models\MobileLegend;

class MobileLegendCompetitionController extends Controller
{
    private MobileLegend $mobileLegend;

    public function __construct()
    {
        $this->mobileLegend = new MobileLegend();
    }

    public function detail()
    {
        return view('user.ml.detail');
    }

    public function create()
    {
        return view('user.ml.form');
    }

    public function store(StoreMobileLegendRequest $request)
    {
        if($this->mobileLegend->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar lomba Mobile Legend');

            return redirect('/dashboard-user');
        }

        $validateData = $request->safe()->except(['kartu_identitas', 'email']);

        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->kartu_identitas->getClientOriginalExtension();
            $namaFile = 'katu-identitas-'.time().".".$extFile;

            // validateData
            $validateData['kartu_identitas'] = $namaFile;

            // tambah data lomba ML
            $user = Auth::user();
            $addUserMobileLegend = $user->mobileLegend()->create($validateData);

            DB::commit();

            // upload file ke folder
            $request->kartu_identitas->move('berkas', $namaFile);

            return redirect()->route('competition.ml.pembayaran', ['mobile_legend' => $addUserMobileLegend]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(MobileLegend $mobileLegend)
    {
        return view('user.ml.pembayaran', [
            'mobileLegend' => $mobileLegend
        ]);
    }

    public function pembayaranProses(UpdateMobileLegendRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->mobileLegend()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('competition.ml.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.mlSuccess');
    }
}
