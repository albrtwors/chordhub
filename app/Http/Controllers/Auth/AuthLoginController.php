<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\Traits\AuthTraitGetBd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
class AuthLoginController extends Controller
{
    use AuthTraitGetBd;    
    
    public function loginUser(LoginRequest $req){

        $validatedData = $req->validated();
        
        if(Auth::attempt($validatedData)){
            
            if(!$this->verifyState($req->name)){
                return response()->json(["status"=>'wrong', 'message'=>'Usuario no activado']);
            }

            $req->session()->regenerate();
            return response()->json(["status"=>'success', 'message'=>'Credenciales Correctas']);

            
            
            
        }

        return response()->json(["status"=>'wrong', 'message'=>'Credenciales Incorrectos']);
        
        
       
    }


    function verifyState($name){
        $user = $this->getUserByName($name);

        return $user->active == 1;
    }

    function getPfp($name){
        $user = $this->getUserByName($name);
        return $user->pfp;
    }
    
    function getId($name){
        $user = $this->getUserByName($name);
        return $user->id;
    }
   
}