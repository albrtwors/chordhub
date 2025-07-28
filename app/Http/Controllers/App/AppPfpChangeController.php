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

        
        $request->validate([
            'pfp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

       
        if ($request->hasFile('pfp')) {
         
            $file = $request->file('pfp');
            $path = $file->store('pfps');
            $globalPath = Storage::url($path);
            
            session(['user_pfp' => $globalPath]);
            $this->insertPfpToDb($globalPath);
            return json_encode([
                'status' => 'success',
                'message' => 'Foto de perfil actualizada correctamente'
            ]);
        }

        return json_encode([
            'status' => 'error',
            'message' => 'No se pudo actualizar la foto de perfil'
        ]);
    }


    function insertPfpToDb($pfp)
    {
        $user = User::where('name', session('user_name'))->first();
        $user->pfp = $pfp;
        $user->save();
    }
}