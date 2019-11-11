<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewClaimAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $claim;

    public function __construct($claim)
    {
        $this->claim = $claim;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewClaimAcknowledgement');
        $message->subject('Claim Acknolwedgement');
        $message->to($this->claim->Email, $this->claim->Name);
        return $message;
    }
}
