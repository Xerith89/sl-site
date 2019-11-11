<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewUpdatedClaimAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewUpdatedClaimAcknowledgement
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $updatedClaim = $event->updatedClaim;

        Mail::send(new NewUpdatedClaimAcknowledgement($updatedClaim));
    }
}
