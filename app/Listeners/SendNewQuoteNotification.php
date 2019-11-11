<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewQuoteNotification;


class SendNewQuoteNotification 
{
  

    /**
     * Handle the event.
     *
     * 
     * @return void
     */
    public function handle($event)
    {
        Mail::send(new NewQuoteNotification($event));
    }
}
