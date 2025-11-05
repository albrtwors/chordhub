<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\SongNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SongListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $users = User::all()->except($event->song->user_id);
        foreach($users as $user){
            Notification::send($user, new SongNotification($event->song));
        }
    }
}