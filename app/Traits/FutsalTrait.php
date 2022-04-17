<?php

namespace App\Traits;

use App\Models\Futsal;
use App\Mail\FutsalRejectVerification;
use App\Mail\FutsalSuccessVerification;
use RealRashid\SweetAlert\Facades\Alert;

trait FutsalTrait {

    public function downloadIdentitas(Futsal $futsal)
    {
        if(!$futsal->kartu_identitas) {
            Alert::error('Gagal', "Kartu Identitas Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("berkas\\" . $futsal->kartu_identitas));
    }

    public function downloadBukti(Futsal $futsal)
    {
        if(!$futsal->bukti_pembayaran) {
            Alert::error('Gagal', "Bukti Pembayaran Belum di Upload");

            return redirect()->back();
        }

        return response()->download(public_path("img\\" . $futsal->bukti_pembayaran));
    }

    public function verifikasiBerhasil(Futsal $futsal)
    {
        return $futsal->sendSuccessMail(new FutsalSuccessVerification($futsal));
    }

    public function verifikasiTolak(Futsal $futsal)
    {
        return $futsal->sendRejectMail(new FutsalRejectVerification($futsal));
    }

}

?>
