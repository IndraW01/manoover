<?php

namespace App\Mail;

use App\Models\Closing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClosingSuccessVerification extends Mailable
{
    use Queueable, SerializesModels;

    public Closing $closing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Closing $closing)
    {
        $this->closing = $closing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Manoover')->view('admin.email.closing.success');
    }
}
