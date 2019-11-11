<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewClaimEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $claim;
    public $filenames;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($claim, $filenames)
    {
        $this->claim = $claim;
        $this->filenames = $filenames;
    }

}
