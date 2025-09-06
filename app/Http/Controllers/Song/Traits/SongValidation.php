<?php

namespace App\Http\Controllers\Song\Traits;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

trait SongValidation 
{
    public function checkRequest($req){
        try{
            $req->validate([
            'song_name' => 'required',
            'song_author' => [
                'required'
            ],
            'song_genre' => [
                'required'
            ],
            'song_structure' => [
                'required'
            ],
            'song_keywords' => 'required'
             ]);

             return true;
        }
        catch(ValidationException $e)
        {
            return false;
        }

    }
}