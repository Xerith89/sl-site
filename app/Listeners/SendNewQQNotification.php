<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\NewQQNotification;
use Illuminate\Support\Facades\Mail;

class SendNewQQNotification 
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
        $quick_quote = $event->quick_quote;
        Mail::send(new NewQQNotification($filenames, $quick_quote));
    }
}
