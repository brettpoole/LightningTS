<?php

namespace App\Listeners;

use App\Events\NewUserRegistered;
use App\Mail\WelcomeEmail;
use Mail;

class SendWelcomeEmail
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
     * @param  NewUserRegistered  $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
        Mail::send(new WelcomeEmail($event->user));
    }
}
