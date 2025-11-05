<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tonality extends Model
{
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function usersSongs()
    {
        return $this->hasMany(UserSongTonality::class);
    }
  
    public function song(){
        return $this->belongsTo('App\Models\Song', 'id', 'song_id');
    }
}