<?php

namespace App\Traits;

use App\Mail\BandRejectVerification;
use App\Mail\BandSuccessVerification;
use App\Models\Band;
use RealRashid\SweetAlert\Facades\Alert;

trait BandTrait {

    public function downloadBukti(Band $band)
    {
        if(!$band->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $band->bukti_pembayaran));
    }

    public function verifikasiBerhasil(Band $band)
    {
        return $band->sendSuccessMail(new BandSuccessVerification($band));
    }

    public function verifikasiTolak(Band $band)
    {
        return $band->sendRejectMail(new BandRejectVerification($band));
    }

}

?>
