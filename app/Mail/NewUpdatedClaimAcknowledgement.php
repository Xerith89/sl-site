<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUpdatedClaimAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $updatedClaim;

    public function __construct($updatedClaim)
    {
        $this->updatedClaim = $updatedClaim;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewUpdatedClaimAcknowledgement');
        $message->subject('Updated Claim Acknolwedgement');
        $message->to($this->updatedClaim->PolicyholderEmail, $this->updatedClaim->PolicyholderName);
        return $message;
    }
}
