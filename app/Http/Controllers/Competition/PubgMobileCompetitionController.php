<?php

namespace App\Http\Controllers\Competition;

use Exception;
use App\Models\PubgMobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePubgMobileRequest;
use Illuminate\Support\Facades\Auth;

class PubgMobileCompetitionController extends Controller
{

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
        $validateData = $request->safe()->except(['kartu_identitas', 'email']);

        try {
            DB::beginTransaction();

            // Ambil data yang dibtuhkan untuk upload file
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
        return view('user.pubg.pembayaran');
    }

    public function pembayaranProses()
    {

    }
}
