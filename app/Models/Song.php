<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Song extends Model
{
    use Notifiable;
    protected $guarded = [];

    //relaciones uno a muchos inversa
    public function author(){
        return $this->belongsTo('App\Models\Author');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

    //relacion uno a uno inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function audio(){
        return $this->morphOne('App\Models\Audio','audioble');
    }

    //relacion muchos a muchos
    public function files(){
        return $this->belongsToMany('App\Models\File');
    }

    //relacion uno a uno
    public function chords(){
        return $this->hasMany('App\Models\Chord');
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    
    public function visit(){
        return $this->morphOne('App\Models\Visit', 'visitable');
    }

    //uno a muchos poli
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function tonalities(){
        return $this->belongsToMany(
            'App\Models\Tonality', 
            'tonality_user', // nombre de la tabla pivote
            'song_id',     // llave foránea en tonality_user para la canción
            'tonality_id')->withPivot('user_id');;    // llave foránea en tonality_user para la tonalidad
     
    }





    public function usersTonality(){
        return $this->hasMany('App\Models\UserTonalitySong');
    }



    // SCOPES

    public function scopeCollabs($q){
        return $q->where('collab', true)->where('user_id', '!=', Auth::user()->id);           
    }
}