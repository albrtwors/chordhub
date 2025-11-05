<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $guarded = [];

    //uno a  uno 
    public function visitable(){
        return $this->morphTo();
    }
}