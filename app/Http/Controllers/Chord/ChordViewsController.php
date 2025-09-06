<?php

namespace App\Http\Controllers\Chord;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class ChordViewsController extends Controller
{
    public function renderChords(){
        $songs = Song::all();
        return view('modules.Chord.songs', compact('songs'));
    }
    public function renderChord($id){
        $songs = Song::find($id);
        $user = User::find(session('user_id'));
        return view('modules.Chord.song', compact('songs', 'user'));
    }

    public function renderDelete(){
        return view ('modules.Chord.delete');
    }

    public function renderEdit($id){
        $song = Song::find($id);
        $user = User::where("name", session("user_name"))->first();
        return view('modules.chord.edit', ['song'=>$song, 'user'=>$user]);
    }
}