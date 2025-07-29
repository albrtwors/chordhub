<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function user(){
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }
}