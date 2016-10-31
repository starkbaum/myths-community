<?php

namespace Myths\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Myths\User;


class UserRegistered
{
    use InteractsWithSockets, SerializesModels;
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

}
