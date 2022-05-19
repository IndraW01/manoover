<?php

namespace App\Traits;

use Exception;
use App\Models\User;
use App\Models\Closing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClosingRejectVerification;
use App\Mail\ClosingSuccessVerification;
use RealRashid\SweetAlert\Facades\Alert;

trait ClosingTrait {

    public function downloadIdentitas(Closing $closing)
    {
        if(!$closing->kartu_identitas) {
            Alert::error('Gagal', "Kartu Identitas Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("berkas\\" . $closing->kartu_identitas));
    }

    public function downloadBukti(Closing $closing)
    {
        if(!$closing->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $closing->bukti_pembayaran));
    }

    public function verifikasiBerhasil(User $user)
    {
        // dd($user);
        try {

            DB::beginTransaction();

            $userClosings = $user->closings()->whereStatus('belum')->get();
            // dd($userClosings);

            foreach($userClosings as $userClosing) {

                $userClosing->update([
                    'status' => 'sudah'
                ]);

                Mail::to($userClosing->email)->send(new ClosingSuccessVerification($userClosing));
            }

            DB::commit();

            Alert::success('Berhasil', 'Peserta Berhasil di Verikasi');

            return redirect()->back();

        }catch(Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'Verifikasi Peserta Gagal');

            return redirect()->back();
        }
    }

    public function verifikasiTolak(User $user)
    {
        try {

            DB::beginTransaction();

            $userClosings = $user->closings()->whereStatus('belum')->get();

            // kirim email tolak ke user
            Mail::to($user->email)->send(new ClosingRejectVerification($userClosings[$userClosings->count() - 1]));

            // Hapus Data pendaftaran tiket
            $user->closings()->whereStatus('belum')->delete();

            // foreach($userClosings as $userClosing) {

            //     $userClosing->update([
            //         'status' => 'tolak'
            //     ]);

            //     Mail::to($userClosing->email)->send(new ClosingSuccessVerification($userClosing));
            // }

            DB::commit();

            Alert::success('Berhasil', 'Verifikasi di Tolak dan data dihapus');

            return redirect()->back();

        }catch(Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'Verifikasi Gagal di Tolak');

            return redirect()->back();
        }
    }

}

?>
