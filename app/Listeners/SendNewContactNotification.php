<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewContactNotification;
use Illuminate\Support\Facades\Mail;

class SendNewContactNotification
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $filenames = $event->filenames;
        $contact = $event->contact;
        Mail::send(new NewContactNotification($filenames, $contact));
    }
}
