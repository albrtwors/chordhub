<?php

namespace App\Policies;

use App\Models\File;
use App\Models\User;

class FilePolicy
{

    public function __construct()
    {
        
    }

    public function modify(User $user, File $file){
        return ($user->id==$file->user_id) || $user->hasRole('admin') || $user->hasRole('owner') || $file->collab;   
    }

    public function delete(User $user, File $file){
        return ($user->id==$file->user_id) || $user->hasRole('admin') || $user->hasRole('owner');   
    }
}