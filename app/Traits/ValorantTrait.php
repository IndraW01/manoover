<?php

namespace App\Traits;

use App\Models\Valorant;
use App\Mail\ValorantRejectVerification;
use App\Mail\ValorantSuccessVerification;
use RealRashid\SweetAlert\Facades\Alert;

trait ValorantTrait {

    public function downloadIdentitas(Valorant $valorant)
    {
        if(!$valorant->kartu_identitas) {
            Alert::error('Gagal', "Kartu Identitas Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("berkas\\" . $valorant->kartu_identitas));
    }

    public function downloadBukti(Valorant $valorant)
    {
        if(!$valorant->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $valorant->bukti_pembayaran));
    }

    public function verifikasiBerhasil(Valorant $valorant)
    {
        return $valorant->sendSuccessMail(new valorantSuccessVerification($valorant));
    }

    public function verifikasiTolak(Valorant $valorant)
    {
        return $valorant->sendRejectMail(new ValorantRejectVerification($valorant));
    }

}

?>
