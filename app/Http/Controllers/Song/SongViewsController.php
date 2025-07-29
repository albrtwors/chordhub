<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Controllers\Auth\AuthSessionVerify;
use Illuminate\Http\Request;

class SongViewsController extends Controller
{
   public function renderSongs(){

        $songs = Song::all();
        return view("modules.Song.songs", compact('songs'));
   }

   public function renderSong($id){
      $songs = Song::find($id);
      return view("modules.Song.song", compact('songs'));
   }

   public function renderCreate(){
      
      return view("modules.Song.create");        
   }

   public function renderModify(){


      return view("modules.Song.modify");
   }

   public function renderDelete(){

      $songs = Song::all();
      return view("modules.Song.delete", compact('songs'));
   }
 
}