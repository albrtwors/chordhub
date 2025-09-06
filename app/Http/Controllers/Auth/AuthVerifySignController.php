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
        $id = session('sign_id');
        $code = $req->codeinput;
        
        if(!$this->verifyCodeValidation($code)){
            return response()->json(["status"=> "wrong", 
                                "message" => "Código de verificación incorrecto"]);
        }
        
        $user = User::find($id);
        $user->update(['active'=>1, 'sign_code'=>null]);
       

        session()->flush();

        return response()->json([
            "status" => "success",
            "message" => "Usuario registrado correctamente"
        ]);
    }


    function verifyCodeValidation($code){
        $user = User::find(session('sign_id'));
       
        return $code == $user->sign_code;
    }

 


}