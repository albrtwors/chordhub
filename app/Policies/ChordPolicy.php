<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chord;
class ChordPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function modify(User $user, Chord $chord){
        return ($user->id==$chord->user_id) || $user->hasRole('admin') || $user->hasRole('owner') || $chord->collab;   
    }

    public function delete(User $user, Chord $chord){
        return ($user->id==$chord->user_id) || $user->hasRole('admin') || $user->hasRole('owner');   
    }
}