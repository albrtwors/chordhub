<?php

namespace App\Http\Controllers\Chord;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChordCreateController extends Controller
{
    public function CreateChordSet(Request $req){
        $structure = $req->input('song_structure');
        $id= $req->input('song_id');


        $this->insertStructureOnBd($structure, $id);
        return response()->json(['status'=>"success", "message"=>"Acordes Importados"]);

    }

    function insertStructureOnBd($structure, $id){
        $song = Song::find($id);
        $song->structure_chords = $structure;
        $song->save();

    }

}