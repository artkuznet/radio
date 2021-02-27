<?php

declare(strict_types=1);

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent implements ShouldBroadcast
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
        return 'my-event';
    }

    public function broadcastOn()
    {
        return new PrivateChannel('test');
    }

    public function broadcastWith()
    {
        return ['text' => $this->text];
    }
}
