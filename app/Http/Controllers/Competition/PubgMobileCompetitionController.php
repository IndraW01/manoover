<?php

namespace App\Http\Controllers\Competition;

use Exception;
use App\Models\PubgMobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePubgMobileRequest;
use App\Http\Requests\UpdatePubgMobileRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PubgMobileCompetitionController extends Controller
{
    private PubgMobile $pubg;

    public function __construct()
    {
        $this->pubg = new PubgMobile();
    }

    public function detail()
    {
        return view('user.pubg.detail');
    }

    public function create()
    {
        return view('user.pubg.form');
    }

    public function store(StorePubgMobileRequest $request)
    {
        if($this->pubg->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar lomba Pubg Mobile');

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

            // tambah data lomba pubg
            $user = Auth::user();
            $addUserPubg = $user->pubg()->create($validateData);

            DB::commit();

            // upload file ke folder
            $request->kartu_identitas->move('berkas', $namaFile);

            return redirect()->route('competition.pubg.pembayaran', ['pubg' => $addUserPubg]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(PubgMobile $pubg)
    {
        return view('user.pubg.pembayaran', [
            'pubg' => $pubg
        ]);
    }

    public function pembayaranProses(UpdatePubgMobileRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->pubg()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('competition.pubg.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.PUBGSuccess');
    }
}
