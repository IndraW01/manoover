<?php

namespace App\Mail;

use App\Models\Band;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BandRejectVerification extends Mailable
{
    use Queueable, SerializesModels;

    public Band $band;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Band $band)
    {
        $this->band = $band;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('admin.email.band.reject');
    }
}
