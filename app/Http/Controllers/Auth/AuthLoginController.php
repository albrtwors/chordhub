<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\Traits\AuthTraitGetBd;
use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
    use AuthTraitGetBd;    
    
    public function loginUser(Request $req){
        $user = $req->input('name');
        $pass = $req->input('pass');
        

        if(!$this->verifyUserOnBd($user, $pass)){ 
            return json_encode(["status"=> "wrong", 
                                "message" => "Usuario o contraseña incorrectos"]);
        } 
        
        if(!$this->verifyState($user)){
            return json_encode(["status"=> "wrong", "message" => "El usuario no está activo"]);
        }

        session(["user_name"=>$user, "user_pfp"=>$this->getPfp($user), "user_id"=>$this->getId($user)]);
        
        return json_encode(["status"=> "success", 
                            "message" => "Usuario logueado correctamente"]);
    }


    function verifyUserOnBd($name, $pass){
        $user = $this->getUserByName($name);
        if ($user && password_verify($pass, $user->password)) {
            return true;          
        }

        return false;


    }

    function verifyState($name){
        $user = $this->getUserByName($name);
        if ($user->state == 1) {
            return true;
        }

        return false;
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