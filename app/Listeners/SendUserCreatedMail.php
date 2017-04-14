<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use App\Mail\UserCreated;
use Mail;

class SendUserCreatedMail
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        Mail::to($event->user->email)->send(new UserCreated($event->user));
    }
}
