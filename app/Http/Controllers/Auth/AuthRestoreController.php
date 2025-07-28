<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Auth\AuthMailController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\Traits\AuthValidations;
use App\Http\Controllers\Auth\Traits\AuthTraitGetBd;

class AuthRestoreController extends Controller
{
    use AuthValidations;
    use AuthTraitGetBd;

    // Send the restore email with a verification code
    public function sendRestoreMail(Request $req){
        $mail = $req->input('mail');
        $code = rand(100000, 999999);
        
        if(!$this->verifyMailOnDb($mail)){
            return json_encode(["status"=> "wrong", 
                                "message" => "El correo electrónico no está registrado"]);
        }

        $this->sendMail($mail, $code);
        $this->insertCodeOnBd($mail, $code);
        session(["restore_mail"=>$mail]);
        return json_encode(["status"=> "success", 
                            "message" => "Correo de restauración enviado correctamente"]);
    }

    // Verify the restore code and proceed with the restoration
    public function verifyRestoreCode(Request $req){
        $mail = session('restore_mail');
        $code = $req->input('inputcode');

        if(!$this->verifyCodeOnDb($mail, $code)){
            return json_encode(["status"=> "wrong", 
                                "message" => "Código de verificación incorrecto"]);
        }   
      
        return json_encode(["status"=> "success", 
                            "message" => "Código de verificación correcto"]);
    }

    public function changePassword(Request $req){
        $pass = $req->input('pass');
        $pass2 = $req->input('repass');

        if(!$this->verifyPasses($pass, $pass2)){
            return json_encode(["status"=> "wrong", 
                                "message" => "Las contraseñas no coinciden"]);
        }

        if(!$this->verifyPassCharacters($req)){
            return json_encode(["status"=> "wrong", 
                                "message" => "La contraseña no cumple con los requisitos"]);
        }

        $this->changePasswordOnDb(session('restore_mail'), $pass);
        session()->flush();
        return json_encode(["status"=> "success", 
                            "message" => "Contraseña cambiada correctamente"]);
    }


    // Send the restore email with the code
    function sendMail($mail, $code){

        $mailcontroller = new AuthMailController();
        $mailcontroller->initvalues($mail,$code);
        $mailcontroller->sendRestoreMail();

    }

    // Insert the restore code into the database
    function insertCodeOnBd($mail, $code){
        $user = $this->getUserByEmail($mail);

        if ($user) {
            $user->restore_code = $code;
            $user->save();
        }
    }

    // Verify the restore code against the database
    function verifyCodeOnDb($mail, $code){
        $user = $this->getUserByEmail($mail);

        if ($user && $user->restore_code == $code) {
            return true;
        }
        return false;
    }

    function changePasswordOnDb($mail, $pass){
        $user = $this->getUserByEmail($mail);

        if ($user) {
            $user->password = password_hash($pass, PASSWORD_DEFAULT);
            $user->save();
            return true;
        }
        return false;
    }

}