<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewClaimNotification extends Mailable
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
        $message = $this->markdown('emails.NewClaimNotification');
        $uploadNum = 0;
        foreach($this->event->filenames as $file) {
            $message->attach('../storage/app/claims/'.$this->event->claim->id.'/images/'.$this->event->filenames[$uploadNum]);
            $uploadNum++;
        }
        $message->subject('New Website Claim Notification');
        $message->to('claims@stephenlower.co.uk', 'Claims');
        return $message;
    }
}
