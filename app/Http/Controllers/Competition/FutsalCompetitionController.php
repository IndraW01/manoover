<?php

namespace App\Http\Controllers\Competition;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFutsalRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateFutsalRequest;
use App\Models\Futsal;

class FutsalCompetitionController extends Controller
{
    private Futsal $futsal;

    public function __construct()
    {
        $this->futsal = new Futsal();
    }

    public function detail()
    {
        return view('user.futsal.detail');
    }

    public function create()
    {
        return view('user.futsal.form');
    }

    public function store(StoreFutsalRequest $request)
    {
        if($this->futsal->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar lomba Futsal');

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

            // tambah data lomba Futsal
            $user = Auth::user();
            $addUserFutsal = $user->futsal()->create($validateData);

            DB::commit();

            // upload file ke folder
            $request->kartu_identitas->move('berkas', $namaFile);

            return redirect()->route('competition.futsal.pembayaran', ['futsal' => $addUserFutsal]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(Futsal $futsal)
    {
        return view('user.futsal.pembayaran', [
            'futsal' => $futsal
        ]);
    }

    public function pembayaranProses(UpdateFutsalRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->futsal()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('competition.futsal.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.putsalSuccess');
    }
}
