<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewUpdatedClaimEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $updatedClaim;
    public $filenames;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($updatedClaim, $filenames)
    {
        $this->updatedClaim = $updatedClaim;
        $this->filenames = $filenames;
    }

}
