<?php

namespace App\Http\Controllers\Competition;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClosingRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateClosingRequest;
use App\Models\Closing;

class ClosingCompetitionController extends Controller
{
    private Closing $closing;

    public function __construct()
    {
        $this->closing = new Closing();
    }

    public function detail()
    {
        return view('user.closing.detail');
    }

    public function create()
    {
        return view('user.closing.form');
    }

    public function store(StoreClosingRequest $request)
    {
        if($this->closing->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar Closing Ceremony');

            return redirect('/dashboard-user');
        }

        $validateData = $request->safe()->except(['kartu_identitas', 'email', 'nama']);

        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->kartu_identitas->getClientOriginalExtension();
            $namaFile = 'katu-identitas-'.time().".".$extFile;

            // validateData
            $validateData['kartu_identitas'] = $namaFile;

            // tambah data lomba closing
            $user = Auth::user();
            $addUserClosing = $user->closing()->create($validateData);

            DB::commit();

            // upload file ke folder
            $request->kartu_identitas->move('berkas', $namaFile);

            return redirect()->route('closing.pembayaran', ['closing' => $addUserClosing]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(Closing $closing)
    {
        if((Carbon::now() > $closing->created_at->addDay())) {
            Alert::error('Gagal', 'Waktu Pembayaran anda telah habis');

            return redirect('/dashboard-user');
        }

        return view('user.closing.pembayaran', [
            'closing' => $closing
        ]);
    }

    public function pembayaranProses(UpdateClosingRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->closing()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('closing.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.ceremonySuccess');
    }
}
