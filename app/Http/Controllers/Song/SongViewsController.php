<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthSessionVerify;
use Illuminate\Http\Request;

class SongViewsController extends Controller
{
   public function renderSongs(){
        AuthSessionVerify::verifyLoginSession();
        return view("modules.Song.songs");
   }
}