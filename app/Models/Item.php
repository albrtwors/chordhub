<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function practices(){
        return $this->belongsToMany('App\Models\Practice')->withPivot('quantity');
    }
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}