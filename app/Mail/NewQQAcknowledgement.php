<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQQAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $quick_quote;

    public function __construct($quick_quote)
    {
        $this->quick_quote = $quick_quote;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewQQAcknowledgement');
        $message->to($this->quick_quote->email, $this->quick_quote->name);
        $message->subject('Thanks For Getting In Touch!');
        return $message;
    }
}
