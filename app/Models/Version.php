<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\Chord;
class Version extends Model
{
    protected $guarded = [];

    public function versionable(){
        return $this->morphTo();
    }
}