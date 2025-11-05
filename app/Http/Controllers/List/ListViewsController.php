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
        $list_songs = $list->songs()->orderBy('pivot_list_order')->get();
     
     
        return view("modules.List.list", ['list'=>$list, 'list_songs'=>$list_songs]);
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
        $lists = Lists::all();
        return view("modules.List.modify", compact('lists'));
    }

    public function renderModifyList($id){
        $list= Lists::find($id);
        $list_songs = $list->songs()->orderBy('pivot_list_order')->get();
        $songs = Song::all();
        return view("modules.List.modify_list", ["list"=>$list, 'list_songs'=>$list_songs,"songs"=>$songs]);
    }
}