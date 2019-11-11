<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewContactNotification extends Mailable
{
    use Queueable, SerializesModels;
    
    public $filenames;
    public $contact;

    public function __construct($filenames, $contact)
    {
        $this->filenames = $filenames;
        $this->contact = $contact;
        
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $message = $this->markdown('emails.NewContactNotification');
        $message->from($this->contact->Email, $this->contact->Name);
        $message->subject('New Website Query');
        switch($this->contact->DepartmentRequired) {
            case 'general':
                $message->to('info@stephenlower.co.uk', 'Info');
                break;
            case 'underwriting':
            case 'quotes':
            case 'renewals':
                $message->to('underwriting@stephenlower.co.uk', 'Underwriting');
                break;
            case 'accounts':
                $message->to('accounts@stephenlower.co.uk', 'Accounts');
                break;
            case 'claims':
                $message->to('claims@stephenlower.co.uk', 'Claims');
                break;
        }
    
        if ($this->filenames) {
            foreach($this->filenames as $file) {
                $message->attach('../storage/app/uploads/contact/'.$this->contact->id.'/'.$file);
            }
        }
        return $message;
    }
}
