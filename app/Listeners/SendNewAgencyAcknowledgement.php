<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewAgencyAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewAgencyAcknowledgement
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $agency = $event->agency;

        Mail::send(new NewAgencyAcknowledgement($agency));
    }
}
