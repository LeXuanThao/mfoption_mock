<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PricingChangeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $price;
    public $symbol;
    public $exchange;

    /**
     * Create a new event instance.
     */
    public function __construct($exchange, $symbol, $price)
    {
        $this->price = $price;
        $this->symbol = $symbol;
        $this->exchange = $exchange;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
