<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongModifyController extends Controller
{
    public function modifySong(Request $req){
        $structure = $req->input("output_value");
        $id = $req->input("id");
        
        $this->modifySongOnBd($structure, $id);
        return json_encode(["status"=>"success", "message"=>"Cambios realizados"]);
    }

    function modifySongOnBd($structure, $id){
        $song = Song::find($id);
        $song->structure = $structure;
        $song->save();
    }
}