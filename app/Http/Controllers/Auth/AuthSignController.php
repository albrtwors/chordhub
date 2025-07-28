<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\AuthMailController;
use App\Http\Controllers\Auth\Traits\AuthValidations;
use App\Models\User;

class AuthSignController extends Controller
{
    use AuthValidations;

    public function signUser(Request $req){


        if(!$this->validateCharacters($req)){
            return json_encode(["status"=> "wrong", 
                                "message" => "Por favor, cumpla el formato de los campos"]);
        }

        $email = $req->input('email');
        $name = $req->input('name');
        $pass = $req->input('pass');
        $role = $req->input('role'); 
        $pass2 = $req->input('repass');
        $code = rand(100000, 999999);
        
        if($this->verifyUserOnBd($email, $name)){
            return json_encode(["status"=> "exists", 
                                "message" => "El usuario o email ya existe"]);
        } 
       
        if(!$this->verifyPasses($pass, $pass2)){
            return json_encode(["status"=> "wrong", 
                                "message" => "Las contraseñas no coinciden"]);
        }

        if(!$this->validateMail($email)){
            return json_encode(["status"=> "wrong", 
                                "message" => "El correo electrónico no es válido"]);
        }
    
        session(["sign_name"=>$name]);
        
        $this->insertUserOnBd($email, $name, $pass, $role, $code, 0);
        $this->sendMail($email, $code); 
       
        return json_encode(["status"=> "success", 
                            "message" => "Correo Electrónico enviado, por favor verifica tu cuenta"]);
       
    }


    function validateCharacters($req)
    {

        try{
            $req->validate([
            'email' => 'required|email',
            'name' => [
                'required',
                'regex:/^[a-zA-Z0-9_]{8,}$/'
            ],
            'pass' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/'
            ],
            'repass' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/'
            ],
            'role' => 'required'
             ]);

             return true;
        }
        catch(ValidationException $e)
        {
            return false;
        }



    }

    function validateMail($mail){
        $key = 'seMhPGJkiE13H59l4anVlp6XfYT4QAFr';
        $url = "https://app.emailverify.io/api/v1/validate?key=$key&email=$mail";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if ($data['status'] === 'valid') {
            return true;
        }
        return false;
        
    }

    function sendMail($mail, $code){

        $mailcontroller = new AuthMailController();
        $mailcontroller->initvalues($mail, $code);
        $mailcontroller->sendVerificationMail();     

    }

    function insertUserOnBd($email, $name, $pass, $role, $code, $state){
        $user = new User();
        $user->mail = $email;
        $user->name = $name;
        $user->password = password_hash($pass, PASSWORD_DEFAULT); 
        $user->role = $role; 
        $user->sign_code = $code; 
        $user->state = $state; 
        $user->save();
    }




}