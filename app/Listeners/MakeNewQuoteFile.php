<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class MakeNewQuoteFile
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //Convert quote to Json
        $json = $event->completed_quote->toJson();
        // Create the directory if it doesn't exist
        $myDir = '../storage/app/quotes/'.$event->completed_quote->id.'/';
        if (!is_dir($myDir)) {
            mkdir($myDir, 0777, true); // true for recursive create
        }
        //Write the json to file
        $file = fopen($event->path, 'a');
        file_put_contents($event->path, $json);
        fclose($file);
    }
}
