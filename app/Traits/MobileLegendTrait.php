<?php

namespace App\Traits;

use App\Models\MobileLegend;

trait MobileLegendTrait {

    public function downloadIdentitas(MobileLegend $mobileLegend)
    {
        return response()->download(public_path("berkas\\" . $mobileLegend->kartu_identitas));
    }

    public function downloadBukti(MobileLegend $mobileLegend)
    {
        return response()->download(public_path("img\\" . $mobileLegend->bukti_pembayaran));
    }

}

?>
