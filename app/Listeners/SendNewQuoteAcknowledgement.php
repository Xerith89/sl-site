<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewQuoteAcknowledgement;
use Illuminate\Support\Facades\Mail;

class SendNewQuoteAcknowledgement 
{
   
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
       
        Mail::send(new NewQuoteAcknowledgement($event));
    }
}
