<?php

namespace App\Http\Controllers\Competition;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Closing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreClosingRequest;
use App\Http\Requests\UpdateClosingRequest;

class ClosingCompetitionController extends Controller
{
    private Closing $closing;

    public function __construct()
    {
        $this->closing = new Closing();
    }

    public function detail()
    {
        $closingSudah = Closing::whereStatus('sudah')->count();
        $closingBelum = Closing::whereStatus('belum')->count();
        $closingtolak = Closing::whereStatus('tolak')->count();

        return view('user.closing.detail', [
            'closingSudah' => $closingSudah,
            'closingBelum' => $closingBelum,
            'closingTolak' => $closingtolak,
        ]);
    }

    public function create(int $stok)
    {
        // dd($stok);
        $allTikectCount = Closing::count();
        $closingSudah = Closing::whereStatus('sudah')->count();
        $closingBelum = Closing::whereStatus('belum')->count();
        $closingtolak = Closing::whereStatus('tolak')->count();

        if($closingSudah + $stok > 400) {
            Alert::error('Gagal', 'Stok Tiket Habis, sisa stok tinggal ' . 400 - $closingSudah);

            return redirect('/dashboard-user');
        }

        if($closingSudah + $closingBelum + $stok > 400) {
            Alert::error('Gagal', 'Stok Tiket Habis, sisa stok tinggal ' . 400 - ($closingSudah + $closingBelum));

            return redirect('/dashboard-user');
        }

        // dd($stok);
        if(Auth::user()->closings->count() + $stok > 5) {
            Alert::error('Gagal', 'Tiket yang bisa anda beli sisa ' . 5 - Auth::user()->closings->count());

            return redirect('/dashboard-user');
        }

        if(Auth::user()->closings()->whereStatus('belum')->get()->count() > 0) {

            // if(Auth::user()->closings()->whereStatus('belum')->first()->bukti_pembayaran) {
            //     Alert::error('Gagal', 'Tunggu Tiket Di Verifikasi');

            //     return redirect('/dashboard-user');
            // }

            Alert::error('Gagal', 'Selesaikan Pembayaran Sebelumnya / Tunggu Tiket Di Verifikasi');

            return redirect('/dashboard-user');
        }

        return view('user.closing.form', [
            'counter' => $stok
        ]);
    }

    public function store(StoreClosingRequest $request, int $stok)
    {
        // dd($request->safe()->except(['no_identitas', 'no_hp', 'domisili', 'kartu_identitas']));

        if(Auth::user()->closings()->whereStatus('belum')->get()->count() > 0) {
            // if(Auth::user()->closings()->whereStatus('belum')->first()->bukti_pembayaran ?? false) {
            //     Alert::error('Gagal', 'Tunggu Tiket Di Verifikasi');

            //     return redirect('/dashboard-user');
            // }

            Alert::error('Gagal', 'Selesaikan Pembayaran Sebelumnya / Tunggu Tiket Di Verifikasi');

            return redirect('/dashboard-user');
        }

        try {
            DB::beginTransaction();

            if(!Auth::user()->dataPendaftaran) {
                // Ambil Data Pendaftaran
                $validateDataPendaftaran = $request->safe()->only(['no_identitas', 'no_hp', 'domisili']);

                // Ambil data yang dibutuhkan untuk upload file
                $extFile = $request->file('kartu_identitas')->getClientOriginalExtension();
                $namaFile = 'katu-identitas-'.time().".".$extFile;

                // validateData
                $validateDataPendaftaran['kartu_identitas'] = $namaFile;

                // Tambah Data Pendaftaran
                Auth::user()->dataPendaftaran()->create($validateDataPendaftaran);

                // upload file ke folder
                $request->kartu_identitas->move('berkas', $namaFile);
            }

            // tambah data lomba closing
            $user = Auth::user();

            // Data Tiket urut
            $tiketTerbaru = Closing::latest()->first()->kode_unik;
            // dd($tiketTerbaru);
            $kode = Str::after($tiketTerbaru, 'MNE-');

            // dd($kode + 1);

            for($i = 1; $i <= $request->input('counter'); $i++) {
                $user->closings()->create([
                    'nama' => $request->input('nama-'. $i),
                    'email' => $request->input('email-'. $i),
                    'tipe' => 'erly',
                    'kode_unik' => 'MNE-' . $kode + 1,
                ]);
            }

            DB::commit();

            return redirect()->route('closing.pembayaran');
        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function pembayaran()
    {
        $userClosingsBelum = Auth::user()->closings()->whereStatus('belum')->get();
        // dd($userClosingsBelum[0]->bukti_pembayaran);
        $userClosingsBelumExists = Auth::user()->closings()->whereStatus('belum')->exists();

        if(!$userClosingsBelumExists || $userClosingsBelum[0]->bukti_pembayaran != null) {
            Alert::error('Gagal', 'Pembayaran Tiket Tidak Ada');

            return redirect('/dashboard-user');
        }

        // if($userClosingsBelum->count() > 0) {
        //     Alert::error('Gagal', 'Pembayaran Tiket Tidak Ada');

        //     return redirect('/dashboard-user');
        // }

        // dd($userClosingsBelum);
        if((Carbon::now() > $userClosingsBelum[$userClosingsBelum->count() - 1]->created_at->addDay())) {
            Alert::error('Gagal', 'Waktu Pembayaran anda telah habis');

            return redirect('/dashboard-user');
        }

        return view('user.closing.pembayaran', [
            'userClosing' => $userClosingsBelum[$userClosingsBelum->count() - 1],
            'counter' => $userClosingsBelum->count()
        ]);
    }

    public function pembayaranProses(UpdateClosingRequest $request)
    {
        try {
            DB::beginTransaction();

            // Ambil data yang dibutuhkan untuk upload file
            $extFile = $request->bukti_pembayaran->getClientOriginalExtension();
            $namaFile = 'bukti-pembayaran-'.time().".".$extFile;

            Auth::user()->closings()->whereStatus('belum')->update([
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
