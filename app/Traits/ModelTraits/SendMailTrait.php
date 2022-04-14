<?php

namespace App\Traits\ModelTraits;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


trait SendMailTrait {

    public function sendSuccessMail($mail)
    {
        try {

            DB::beginTransaction();

            $this->update([
                'status' => 'sudah',
            ]);

            Mail::to($this->user->email)->send($mail);

            DB::commit();

            Alert::success('Berhasil', 'Peserta Berhasil di Verikasi');

            return redirect()->back();

        }catch(Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'Verifikasi Peserta Gagal');

            return redirect()->back();
        }
    }

    public function sendRejectMail($mail)
    {
        try {

            DB::beginTransaction();

            $this->update([
                'status' => 'tolak',
            ]);

            Mail::to($this->user->email)->send($mail);

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
