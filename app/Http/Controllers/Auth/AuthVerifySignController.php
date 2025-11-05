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
        $user = User::find($id);
        
        
        if(!session('attempts')){
            $attempts = session(['attempts'=>3]);
        }
        
        
        if(!$this->verifyCodeValidation($code)){
            $attempts = session('attempts');
            $attempts--;

            $attemptMessage = $attempts > 1 ? 'Código incorrecto '.$attempts.' intentos restantes' : 'Código incorrecto 1 intento restante';
            if($attempts!=0){
                session(['attempts'=>$attempts]);
                return response()->json(['status'=>'wrong','message'=>$attemptMessage]);
            }

            session()->flush();
            $user->delete();
            return response()->json(['status'=>'redirect', 'message'=>'Intentos permitidos superados, intente de nuevo el registro']);

            
           
        }

        if ($user->created_at->diffInMinutes() >= 60) {

            $user->delete();
            session()->flush();
            return response()->json(["status"=> "wrong", 
                                "message" => "Su sesión de registro ha expirado, intente de nuevo el registro"]);
        }


        $user->update(['active'=>1, 'sign_code'=>null]);
        $user->code()->delete();

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