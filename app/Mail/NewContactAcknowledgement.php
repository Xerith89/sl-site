<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewContactAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;
    
    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewContactAcknowledgement');
        $message->subject('Contact Acknolwedgement');
        $message->to($this->contact->Email, $this->contact->Name);
        return $message;
    }
}
