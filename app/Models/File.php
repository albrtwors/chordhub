<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class File extends Model
{
    use Notifiable;
    protected $guarded = [];

    //relacion muchos a muchos
    public function songs(){
     
        return $this->belongsToMany('App\Models\Song')
                    ->withPivot('list_order')
                    ->orderBy('file_song.list_order', 'asc');
    }

    //uno a uno
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //uno a muchos poli
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}