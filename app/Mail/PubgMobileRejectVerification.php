<?php

namespace App\Mail;

use App\Models\PubgMobile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PubgMobileRejectVerification extends Mailable
{
    use Queueable, SerializesModels;

    public PubgMobile $pubg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PubgMobile $pubg)
    {
        $this->pubg = $pubg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('admin.email.pubg.reject');
    }
}
