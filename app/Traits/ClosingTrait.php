<?php

namespace App\Traits;

use App\Mail\ClosingRejectVerification;
use App\Mail\ClosingSuccessVerification;
use App\Models\Closing;
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

    public function verifikasiBerhasil(Closing $closing)
    {
        return $closing->sendSuccessMail(new ClosingSuccessVerification($closing));
    }

    public function verifikasiTolak(Closing $closing)
    {
        return $closing->sendRejectMail(new ClosingRejectVerification($closing));
    }

}

?>
