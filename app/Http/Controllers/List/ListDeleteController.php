<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use App\Models\Lists;
use Illuminate\Http\Request;

class ListDeleteController extends Controller
{
    public function DeleteList($id){
        $this->removeListFromDb($id);

        return json_encode(["status"=>"success", "message"=>"Cancionero eliminado"]);


    }

    function removeListFromDb($id){
        $list = Lists::find($id);
        $list->songs()->detach();
        $list->delete();
    }
}