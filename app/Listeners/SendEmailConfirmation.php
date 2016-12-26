<?php

namespace App\Listeners;

use App\Events\Users\UserWasCreated;

class SendEmailConfirmation
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated $event
     */
    public function handle(UserWasCreated $event)
    {
    }
}
