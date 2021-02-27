<?php

declare(strict_types=1);

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PublicEvent implements ShouldBroadcast
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function broadcastAs()
    {
        return 'public-event';
    }

    public function broadcastOn()
    {
        return new Channel('public-channel');
    }

    public function broadcastWith()
    {
        return ['text' => $this->text];
    }
}
