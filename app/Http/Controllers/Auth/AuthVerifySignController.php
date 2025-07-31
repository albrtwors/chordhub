<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\Traits\AuthValidations;
use Illuminate\Http\Request;

class AuthVerifySignController extends Controller
{
    use AuthValidations;

    public function verifySignCode(Request $req){
        $name = session('sign_name');
        $code = $req->input('codeinput');


        
        if(!$this->verifyCodeValidation($code)){
            return json_encode(["status"=> "wrong", 
                                "message" => "Código de verificación incorrecto"]);
        }

        
        $this->updateUserState($name);
        session()->flush();
        return json_encode(["status"=> "success", 
                            "message" => "Usuario registrado correctamente"]);
        
    }


    function verifyCodeValidation($code){
        $user = User::where('name', session('sign_name'))->first();
        if($code == $user->sign_code){
            return true;
        }
        return false;
    }

    function updateUserState($name){
        $user = User::where('name', $name)->first();
        $user->state = 1;
        $user->sign_code = null;
        $user->save();   
    }


}