<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewPaymentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $payment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payment)
    {
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.NewPaymentNotification');
        $message->from($this->payment->EmailAddress, $this->payment->Name);
        $message->to('accounts@stephenlower.co.uk', 'Accounts');
        $message->subject('New Payment Notification');

        return $message;
    }
}
