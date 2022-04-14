<?php

namespace App\Traits;

use App\Mail\MobileLegendRejectVerification;
use App\Models\MobileLegend;
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
        return $mobileLegend->sendSuccessMail(new MobileLegendSuccessVerification($mobileLegend));
    }

    public function verifikasiTolak(MobileLegend $mobileLegend)
    {
        return $mobileLegend->sendRejectMail(new MobileLegendRejectVerification($mobileLegend));
    }

}

?>
