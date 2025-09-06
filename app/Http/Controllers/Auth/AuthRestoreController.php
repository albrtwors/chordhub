<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\AuthMailController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\Traits\AuthValidations;
use App\Http\Controllers\Auth\Traits\AuthTraitGetBd;
use App\Http\Requests\RestoreRequest;
class AuthRestoreController extends Controller
{
    use AuthValidations;
    use AuthTraitGetBd;

    // Send the restore email with a verification code
    public function sendRestoreMail(Request $req){
        $mail = $req->email;
        $code = rand(100000, 999999);
        
        if(!$this->verifyMailOnDb($mail)){
            return response()->json(["status"=> "wrong", 
                                "message" => "El correo electrónico no está registrado"]);
        }

        $this->sendMail($mail, $code);
        $this->insertCodeOnBd($mail, $code);
        session(["restore_mail"=>$mail]);
        return response()->json(["status"=> "success", 
                            "message" => "Correo de restauración enviado correctamente"]);
    }

    // Verify the restore code and proceed with the restoration
    public function verifyRestoreCode(Request $req){
        $mail = session('restore_mail');
        $code = $req->codeinput;

        if(!$this->verifyCodeOnDb($mail, $code)){
            return response()->json(["status"=> "wrong", 
                                "message" => "Código de verificación incorrecto"]);
        }   
      
        return response()->json(["status"=> "success", 
                            "message" => "Código de verificación correcto"]);
    }

    public function changePassword(RestoreRequest $req){
        
        $pass = $req->password;
        $this->changePasswordOnDb(session('restore_mail'), $pass);
        session()->flush();
        return response()->json(["status"=> "success", 
                            "message" => "Contraseña cambiada correctamente"]);
    }


    
    function sendMail($mail, $code){

        $mailcontroller = new AuthMailController();
        $mailcontroller->initvalues($mail,$code);
        $mailcontroller->sendRestoreMail();

    }

    // Insert the restore code into the database
    function insertCodeOnBd($mail, $code){
        $user = $this->getUserByEmail($mail);
        $user->update(['restore_code'=>$code]);
        
     
        
        
    }

    // Verify the restore code against the database
    function verifyCodeOnDb($mail, $code){
        $user = $this->getUserByEmail($mail);
        return $user->restore_code == $code;
    }

    function changePasswordOnDb($mail, $pass){
        $user = $this->getUserByEmail($mail);
        $user->update(['password'=>password_hash($pass, PASSWORD_DEFAULT),'restore_code'=>null]);
      
    }

}