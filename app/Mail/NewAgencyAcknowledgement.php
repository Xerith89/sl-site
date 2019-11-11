<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewAgencyAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $agency;

    public function __construct($agency)
    {
        $this->agency = $agency;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewAgencyAcknowledgement');
        $message->subject('Agency Application Acknolwedgement');
        $message->to($this->agency->CompanyEmail, $this->agency->CompanyName);
        return $message;
    }
}
