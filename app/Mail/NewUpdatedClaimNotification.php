<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUpdatedClaimNotification extends Mailable
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
        $message = $this->markdown('emails.NewUpdatedClaimNotification');
        $uploadNum = 0;
        foreach($this->event->filenames as $file) {
            $message->attach('../storage/app/claims/'.$this->event->updatedClaim->ClaimNumber.'/updates/'.$this->event->filenames[$uploadNum]);
            $uploadNum++;
        }
        $message->subject('New Website Claim Update Notification');
        $message->to('claims@stephenlower.co.uk', 'Claims');
        return $message;
    }
}
