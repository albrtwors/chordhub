<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Chord extends Model
{
    use Notifiable;
    protected $guarded = [];

    //uno a uno
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function song(){
        return $this->belongsTo('App\Models\Song');
    }
    //uno a muchos poli
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}