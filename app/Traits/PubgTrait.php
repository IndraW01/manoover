<?php

namespace App\Traits;

use App\Models\PubgMobile;
use App\Mail\PubgMobileRejectVerification;
use App\Mail\PubgMobileSuccessVerification;
use RealRashid\SweetAlert\Facades\Alert;

trait PubgTrait {

    public function downloadIdentitas(PubgMobile $pubg)
    {
        if(!$pubg->kartu_identitas) {
            Alert::error('Gagal', "Kartu Identitas Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("berkas\\" . $pubg->kartu_identitas));
    }

    public function downloadBukti(PubgMobile $pubg)
    {
        if(!$pubg->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $pubg->bukti_pembayaran));
    }

    public function verifikasiBerhasil(PubgMobile $pubg)
    {
        return $pubg->sendSuccessMail(new PubgMobileSuccessVerification($pubg));
    }

    public function verifikasiTolak(PubgMobile $pubg)
    {
        return $pubg->sendRejectMail(new PubgMobileRejectVerification($pubg));
    }

}

?>
