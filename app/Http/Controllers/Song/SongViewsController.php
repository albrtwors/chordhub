<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\User;
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
      $user = $songs->user;

      return view("modules.Song.song", ["songs"=>$songs, "user"=>$user]);
   }

   public function renderCreate(){
      
      return view("modules.Song.create");        
   }

   public function renderModify(){

      $songs = Song::all();
      return view("modules.Song.modify", compact('songs'));
   }

   public function renderModifySong($id){
      $song = Song::find($id);
      return view("modules.Song.modify_song", compact('song'));
   }

   public function renderDelete(){

      $songs = Song::all();
      return view("modules.Song.delete", compact('songs'));
   }
 
}