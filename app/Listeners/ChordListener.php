<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Models\Chord;
use App\Notifications\ChordNotification;
class ChordListener
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
        $users = User::all()->except($event->chord->user_id);
        foreach($users as $user){
            Notification::send($user, new ChordNotification($event->chord));
        }

    }
}