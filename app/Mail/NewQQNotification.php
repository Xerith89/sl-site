<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQQNotification extends Mailable
{
    use Queueable, SerializesModels;
    
    public $filenames;
    public $quick_quote;

    public function __construct($filenames, $quick_quote)
    {
        $this->filenames = $filenames;
        $this->quick_quote = $quick_quote;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewQQNotification');
        $message->subject('New Website Quick Quote');
        $message->to('underwriting@stephenlower.co.uk', 'Underwriting');
        if ($this->filenames) {
            foreach($this->filenames as $file) {
                $message->attach('../storage/app/uploads/quickquote/'.$this->quick_quote->id.'/'.$file);
            }
        }
        return $message;
    }
}
