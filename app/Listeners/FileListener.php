<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\FileNotification;
use Illuminate\Support\Facades\Notification;
class FileListener
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
        $users = User::all()->except($event->file->user_id);
        foreach($users as $user){
            Notification::send($user, new FileNotification($event->file));
        }
    }
}