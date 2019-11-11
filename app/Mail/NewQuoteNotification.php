<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQuoteNotification extends Mailable
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
        $message =$this->markdown('emails.NewQuoteNotification')->attach($this->event->path);
        $message->to('underwriting@stephenlower.co.uk', "Underwriting Department - SLIS Ltd");
        return $message;
    }
}
