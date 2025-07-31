<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Song;
use App\Models\Lists;

class ListViewsController extends Controller
{
    public function renderLists(){
        $lists = Lists::all();
        return view("modules.List.lists", compact('lists'));
    }

    public function renderList($id){
        $list = Lists::find($id);
        return view("modules.List.list", compact('list'));
    }

    public function renderCreate(){
        $songs = Song::all();
        

        return view("modules.List.create", ["songs"=>$songs]);
    }

    public function renderDelete(){
        $lists = Lists::all();
        return view("modules.List.delete", compact('lists'));
    }

    public function renderModify(){
        return view("modules.List.modify");
    }
}