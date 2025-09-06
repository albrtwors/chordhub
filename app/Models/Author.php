<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    //uno a muchos
    public function songs(){
        return $this->hasMany('App\Models\Song');
    }
}