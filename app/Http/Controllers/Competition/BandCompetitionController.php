<?php

namespace App\Http\Controllers\Competition;

use Exception;
use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBandRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateBandRequest;
use Carbon\Carbon;

class BandCompetitionController extends Controller
{
    private Band $band;

    public function __construct()
    {
        $this->band = new Band();
    }

    public function detail()
    {
        return view('user.band.detail');
    }

    public function create()
    {
        return view('user.band.form');
    }

    public function store(StoreBandRequest $request)
    {
        if($this->band->isRegistered()) {
            Alert::error('Gagal', 'Anda telah mendaftar lomba Band');

            return redirect('/dashboard-user');
        }

        $validateData = $request->safe()->except(['email']);

        try {
            DB::beginTransaction();

            // tambah data lomba Band
            $user = Auth::user();
            $addUserBand = $user->band()->create($validateData);

            DB::commit();

            return redirect()->route('competition.band.pembayaran', ['band' => $addUserBand]);
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran(Band $band)
    {
        if((Carbon::now() > $band->created_at->addDay())) {
            Alert::error('Gagal', 'Waktu Pembayaran anda telah habis');

            return redirect('/dashboard-user');
        }

        return view('user.band.pembayaran', [
            'band' => $band
        ]);
    }

    public function pembayaranProses(UpdateBandRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->band()->update([
                'bukti_pembayaran' => $namaFile
            ]);

            DB::commit();

            // upload file ke folder
            $request->bukti_pembayaran->move('img', $namaFile);

            return redirect()->route('competition.band.success');

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }

    }

    public function success()
    {
        return view('auth.success.bandSuccess');
    }
}
