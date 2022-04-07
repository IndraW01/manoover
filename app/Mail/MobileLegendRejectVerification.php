<?php

namespace App\Mail;

use App\Models\MobileLegend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MobileLegendRejectVerification extends Mailable
{
    use Queueable, SerializesModels;

    public MobileLegend $mobileLegend;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MobileLegend $mobileLegend)
    {
        $this->mobileLegend = $mobileLegend;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('email.mobileLegend.reject');
    }
}
