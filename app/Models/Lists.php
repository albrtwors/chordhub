<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $table = "list";

    public function songs(){
        return $this->belongsToMany("App\Models\Song");
    }
}