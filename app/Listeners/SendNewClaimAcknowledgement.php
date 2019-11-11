<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewClaimAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewClaimAcknowledgement
{
   
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $claim = $event->claim;

        Mail::send(new NewClaimAcknowledgement($claim));
    }
}
