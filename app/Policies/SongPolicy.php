<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Song;
class SongPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function modify(User $user,Song $song)
    {
        return ($user->id==$song->user_id) || $user->hasRole('admin') || $user->hasRole('owner') || $song->collab;   
    }

    public function delete(User $user,Song $song)
    {
        return ($user->id==$song->user_id) || $user->hasRole('admin') || $user->hasRole('owner');   
    }

}