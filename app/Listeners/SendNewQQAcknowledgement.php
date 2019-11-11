<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewQQAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewQQAcknowledgement 
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $quick_quote = $event->quick_quote;
        Mail::send(new NewQQAcknowledgement($quick_quote));
    }
}
