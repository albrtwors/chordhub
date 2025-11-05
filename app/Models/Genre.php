<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];

    //one to many inverse
    public function songs(){
        return $this->hasMany('App\Models\Song');
    }
}