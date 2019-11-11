<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewAgencyNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        $message = $this->markdown('emails.NewAgencyNotification');
        $uploadNum = 0;
        foreach($this->event->filenames as $file) {
            $message->attach('../storage/app/agencies/'.$this->event->agency->id.'/accounts/'.$this->event->filenames[$uploadNum]);
            $uploadNum++;
        }
        $message->subject('New Agency Application');
        $message->to('info@stephenlower.co.uk', 'Info');
        return $message;
    }
}
