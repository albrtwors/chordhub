<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function commentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function parent(){
        return $this->belongsTo('App\Models\Comment', 'parent_id');
    }
    public function responses(){
       return $this->hasMany('App\Models\Comment', 'parent_id');
    }

    public function responsesRecursive()
    {
    return $this->responses()->with('responsesRecursive');
    }
}