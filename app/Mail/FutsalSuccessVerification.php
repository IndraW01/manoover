<?php

namespace App\Mail;

use App\Models\Futsal;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FutsalSuccessVerification extends Mailable
{
    use Queueable, SerializesModels;

    public Futsal $futsal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Futsal $futsal)
    {
        $this->futsal = $futsal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('admin.email.futsal.success');
    }
}
