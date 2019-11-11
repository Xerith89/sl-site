<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewQuickQuoteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $quick_quote;
    public $filenames;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($quick_quote, $filenames)
    {
        $this->quick_quote = $quick_quote;
        $this->filenames = $filenames;
    }
}
