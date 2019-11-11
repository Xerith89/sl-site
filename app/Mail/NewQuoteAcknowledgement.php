<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQuoteAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;
    
    public $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewQuoteAcknowledgement');
        $message->subject('Quote Request Received');
        $message->to($this->event->completed_quote->Email, $this->event->completed_quote->Firstname.' '. $this->event->completed_quote->Surname);
        return $message;
    }
}
