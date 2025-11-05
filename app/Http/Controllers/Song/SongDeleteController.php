<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongDeleteController extends Controller
{
    public function deleteSong($id){
        
        
        $song = Song::find($id);

        $this->deleteSongFromDb($song);
        return json_encode(["status"=>"success", "message"=>"Canción eliminada con éxito"]);
    }

    function deleteSongFromDb($song){
        $song->delete();
    }
}