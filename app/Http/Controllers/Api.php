<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class Api extends Controller
{
    public function getSongs(){
        return response()->json(Song::all());
    }
}