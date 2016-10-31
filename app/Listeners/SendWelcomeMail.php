<?php

namespace Myths\Listeners;

use Mail;
use Myths\Events\UserRegistered;
use Myths\Mail\WelcomeEmail;


class SendWelcomeMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $email = new WelcomeEmail($event->user);

        Mail::to($event->user->email)->send($email);
    }
}
