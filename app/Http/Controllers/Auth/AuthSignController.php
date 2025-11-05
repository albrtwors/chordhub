<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\AuthMailController;
use App\Http\Controllers\Auth\Traits\AuthValidations;
use App\Models\User;
use App\Http\Requests\SignRequest;
use Illuminate\Support\Str;
class AuthSignController extends Controller
{
    use AuthValidations;

    public function signUser(SignRequest $req){

        $validatedData = $req->validated();
        $code = rand(100000, 999999);

        if(!$this->validateMail($req->email)){
            return response()->json(["status"=> "wrong", 
                                "message" => "El correo electrónico no es válido"]);
        }
    
       $user = User::create([
            'name'=>$validatedData['name'],
            'password'=>password_hash($validatedData['password'], PASSWORD_DEFAULT),
            'email'=>$validatedData['email'],
            'sign_code'=>$code
       ])->assignRole('visitor');
       $uuid=Str::uuid()->toString();
       $user->code()->create(['verification_code'=> $code, 'uid'=>$uuid]);
       

       session(['sign_id'=>$user->id, 'session_uid'=>$uuid]);
       $this->sendMail($req->email, $code);
       return response()->json(['status'=>'success', 'message'=>'Usuario creado, revisa tu email']);
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





}