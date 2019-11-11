<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewContactAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewContactAcknowledgement 
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $contact = $event->contact;

        Mail::send(new NewContactAcknowledgement($contact));
    }
}
