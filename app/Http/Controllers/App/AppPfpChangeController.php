<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        
        $pfp = $request->file('pfp');
        $path = $pfp->store('pfps', 'public');
        $globalPath = Storage::url($path);


        if($this->validatePfp($request)) {
            return json_encode([
                'status' => 'error',
                'message' => 'La foto de perfil no es válida'
            ]);

        }
        
        $this->deleteLastPfp();

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
            'pfp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    function insertPfpToDb($pfp)
    {
        $user = User::where('name', session('user_name'))->first();
        $user->pfp = $pfp;
        $user->save();
    }

    function deleteLastPfp(){
        $user = User::where('name', session('user_name'))->first();
        $pfp = str_replace( '/storage/', '', $user->pfp);


        if($user->pfp) {
            Storage::disk('public')->delete($pfp);
            $user->pfp = null;
            $user->save();
            session()->forget('user_pfp');
        }
    }
}