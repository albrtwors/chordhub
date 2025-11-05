<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Lists;
use App\Models\File;
use App\Models\Song;
use Illuminate\Http\Request;

class SearchListController extends Controller
{
    public function SearchListSongs(Request $req){
        $songs = Song::where('name','LIKE', '%'.$req->song_name.'%')->get();
        return response()->json(['songs'=>$songs]);
    }
    
    public static function SearchLists(Request $req){
        $listname = $req->list_name;
        $lists = File::where("name", "like", $listname."%")->take(10)->get();
        return view('modules.List.lists', compact('lists'));
        
    }
}