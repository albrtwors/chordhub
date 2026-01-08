<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AppPfpChangeController extends Controller
{
    public function changePfp(Request $request)
    {


        if(!$this->hasFilePfp($request)){
            return json_encode([
                'status' => 'error',
                'message' => 'No se ha seleccionado una foto de perfil'
            ]);
        }
        
        // $this->deleteLastPfp(); pending
        $pfp = $request->file('pfp');
        $path = $pfp->store('images', 'public');
        $globalPath = Storage::url($path);


        if($this->validatePfp($request)) {
            return json_encode([
                'status' => 'error',
                'message' => 'La foto de perfil no es válida'
            ]);

        }

        
        
        session(['user_pfp' => $globalPath]);
        $this->insertPfpToDb($globalPath);
        return json_encode([
                'status' => 'success',
                'message' => 'Foto de perfil actualizada correctamente'
        ]);
     

      
    
    }

    function hasFilePfp(Request $request)
    {
        return $request->hasFile('pfp');
    }   

    function validatePfp(Request $request)
    {
        $request->validate([
            'pfp' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:2048',
        ]);
    }

    function insertPfpToDb($pfp)
    {
        $user = User::find(Auth::user()->id);
        if(!isset($user->image)){
            $user->image()->create(["url"=>$pfp, 'imageable_type'=>'App\Models\User', 'imageable_id'=>Auth::user()->id]);
        }else{
            $user->image()->update(['url'=>$pfp]);
        }
        
    
    }

    function deleteLastPfp(){
        $user = User::find(Auth::user()->id);
        if($user->image->url){
        
            $pfp = str_replace( '/storage/', '', $user->image->url);
            Storage::disk('public')->delete($pfp);
            $user->image()->update(['url'=>$pfp]);



        }



    }
}