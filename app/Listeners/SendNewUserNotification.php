<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class SendNewUserNotification
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event): void
    {
        $admins = User::whereHas('roles', function ($query) {
                $query->where('id', 1);
            })->get();

        Notification::send($admins, new NewUserNotification($event->user));
    }
}
