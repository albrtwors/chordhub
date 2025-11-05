<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use App\Models\Lists;
use Illuminate\Http\Request;

class ListModifyController extends Controller
{
    public function modifyList(Request $req){
        $ids = $req->input('songs');
        $id = $req->input('id');
        $name = $req->input('listname');
        $order = $req->input('order');
        
        $this->modifyListFromDb($name, $id, $ids);
        
        return json_encode(["status"=>"success", "message"=>"Lista Modificada"]);
        
    }

    function modifyListFromDb($name, $id,$ids,){
        $list = Lists::find($id);
        $list->name = $name;
        $list->songs()->detach();
        $list->save();
        
        if($ids){
            foreach ($ids as $index => $songId) {
            $syncData[$songId] = ['list_order' => $index + 1];
            }
            if($syncData){
                $list->songs()->sync($syncData);
            
            }



        }

        
        

    }

  
}