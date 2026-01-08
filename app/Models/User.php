<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
   
    use HasFactory, Notifiable, HasRoles;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
        'sign_code',
        'restore_code'
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //relacion uno a uno
    public function log(){
        return $this->hasMany('App\Models\Log');
    }
    public function songs(){
        return $this->hasMany('App\Models\Song');
    }

    public function chord(){
        return $this->hasOne('App\Models\Chord');
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    
    //relacion uno a muchos
    public function files(){
        return $this->hasMany('App\Models\Files');
        
    }
    // //muchos a muchos 
    public function practices(){
        return $this->belongsToMany('App\Models\Practice');
    }
    public function practice(){
        return $this->hasOne('App\Models\Practice');
    }
    
    // public function roles(){
    //    return $this->belongsToMany('Spatie\Permission\Models\Role', 'model_has_roles', 'model_id');
    // }

    public function code(){
        return $this->hasOne('App\Models\Code');
    }

    public function tonalities(){
        return $this->belongsToMany('App\Models\Tonality')->withPivot('song_id', 'tonality_id');
    }
    // public function songsTonality(){
    //     return $this->hasMany('App\Models\UserTonalitySong');
    // }

}