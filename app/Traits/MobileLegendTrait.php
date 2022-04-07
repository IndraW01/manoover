<?php

namespace App\Traits;

use App\Mail\MobileLegendRejectVerification;
use Exception;
use App\Models\MobileLegend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MobileLegendSuccessVerification;
use RealRashid\SweetAlert\Facades\Alert;

trait MobileLegendTrait {

    public function downloadIdentitas(MobileLegend $mobileLegend)
    {
        if(!$mobileLegend->kartu_identitas) {
            Alert::error('Gagal', "Kartu Identitas Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("berkas\\" . $mobileLegend->kartu_identitas));
    }

    public function downloadBukti(MobileLegend $mobileLegend)
    {
        if(!$mobileLegend->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $mobileLegend->bukti_pembayaran));
    }

    public function verifikasiBerhasil(MobileLegend $mobileLegend)
    {
        try {

            DB::beginTransaction();

            $mobileLegend->update([
                'status' => 'sudah',
            ]);

            Mail::to($mobileLegend->user->email)->send(new MobileLegendSuccessVerification($mobileLegend));

            DB::commit();

            Alert::success('Berhasil', 'Peserta Berhasil di Verikasi');

            return redirect()->back();

        }catch(Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'Verifikasi Peserta Gagal');

            return redirect()->back();
        }
    }

    public function verifikasiTolak(MobileLegend $mobileLegend)
    {
        try {

            DB::beginTransaction();

            $mobileLegend->update([
                'status' => 'tolak',
            ]);

            Mail::to($mobileLegend->user->email)->send(new MobileLegendRejectVerification($mobileLegend));

            DB::commit();

            Alert::success('Berhasil', 'Verifikasi di Tolak');

            return redirect()->back();

        }catch(Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'Verifikasi Gagal di Tolak');

            return redirect()->back();
        }
    }

}

?>
