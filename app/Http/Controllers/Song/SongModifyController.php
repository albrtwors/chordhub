<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Controllers\Song\Traits\SongValidation;
use Illuminate\Http\Request;

class SongModifyController extends Controller
{
    use SongValidation; 

    
    public function modifySong(Request $req){

        if(!$this->checkRequest($req)){
            return response()->json(["status"=>"wrong","message"=>"Tienes que llenar todos los campos"]);
        }

        $structure = $req->input("song_structure");
        $name = $req->input('song_name');
        $genre = $req->input('song_genre');
        $structure = $req->input('song_structure');
        $keywords = $req->input('song_keywords');
        $id = $req->input("song_id");
        
        $this->modifySongOnBd($structure, $id, $name, $keywords, $genre);
        return json_encode(["status"=>"success", "message"=>"Cambios realizados"]);
    }

    function modifySongOnBd($structure, $id, $name, $keywords, $genre){
        $song = Song::find($id);
        $song->structure = $structure;
        $song->name = $name;
        $song->keywords = $keywords;
        $song->genre = $genre;
        $song->save();
    }
}