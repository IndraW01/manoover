<?php

namespace App\Http\Controllers\Competition;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreValorantRequest;
use App\Http\Requests\UpdateValorantRequest;
use App\Models\Valorant;

class ValorantCompetitionController extends Controller
{
    private Valorant $valorant;

    public function __construct()
    {
        $this->valorant = new Valorant();
    }

    public function detail()
    {
        return view('user.valorant.detail');
    }

    public function create()
    {
        return view('user.valorant.form');
    }

    public function store(StoreValorantRequest $request)
    {
        if($this->valorant->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar lomba Valorant');

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

            // tambah data lomba valorant
            $user = Auth::user();
            $addUserValorant = $user->valorant()->create($validateData);

            DB::commit();

            // upload file ke folder
            $request->kartu_identitas->move('berkas', $namaFile);

            return redirect()->route('competition.valorant.pembayaran', ['valorant' => $addUserValorant]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(Valorant $valorant)
    {
        return view('user.valorant.pembayaran', [
            'valorant' => $valorant
        ]);
    }

    public function pembayaranProses(UpdateValorantRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->valorant()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('competition.valorant.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.valorantSuccess');
    }
}
