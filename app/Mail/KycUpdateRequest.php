<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KycUpdateRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;

    /**
     * Create a new message instance.
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('KYC Update Request')
                    ->markdown('emails.kyc_update_request');
    }
}
