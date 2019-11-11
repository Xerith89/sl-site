<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewUpdatedClaimNotification;
use Illuminate\Support\Facades\Mail;

class SendNewUpdatedClaimNotification
{
    
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::send(new NewUpdatedClaimNotification($event));
    }
}
