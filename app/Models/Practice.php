<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $guarded = [];

    public function items(){
        return $this->belongsToMany('App\Models\Item');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function userParticipants(){
        return $this->belongsToMany('App\Models\User');
    }
}