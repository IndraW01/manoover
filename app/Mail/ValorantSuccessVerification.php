<?php

namespace App\Mail;

use App\Models\Valorant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValorantSuccessVerification extends Mailable
{
    use Queueable, SerializesModels;

    public Valorant $valorant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Valorant $valorant)
    {
        $this->valorant =  $valorant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('admin.email.valorant.success');
    }
}
