<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\Lists;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ListCreateController extends Controller
{
    public function createList(Request $req){
        $ids = $req->input("songs");
        $listname = $req->input("listname");
        $date = now()->toDateString();

        $liid = $this->insertListOnBd($listname, $date);
        $this->insertSongsOnPivot($liid, $ids);


        return response()->json([
        'status' => 'success',
        'message' => 'Lista creada',
        'songs' => $ids,
    ]);
    }

    function insertListOnBd($name, $date){
        $list = new Lists();
        $list->name = $name;
        $list->date = $date;
        $list->user_id = session("user_id");
        $list->save();

        return $list->id;
        
    }

    function insertSongsOnPivot($id, $ids){
        $list = Lists::find($id);
        $list->songs()->sync($ids);
    }
}