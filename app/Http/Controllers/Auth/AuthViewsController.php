<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthViewsController extends Controller
{
    public function renderLogin(){
        
        if(session('user_name')){
            return view('modules.App.dashboard');
        }
        
        return view("modules.Auth.login");
    }


    public function renderSign(){
        return view("modules.Auth.sign");
    }


    //FUNCION NUEVA PARA EL CODIGO DE VERIFICACION
    public function renderSignCodeVal($id){
        $user = User::find(session('sign_id'));
        $code = $user->code->uid;

        if(!session('sign_id')){
            return to_route('sign');
        }

        if($id != $code){
            return redirect()->to(route('login'));
        }

        return view("modules.Auth.sign_code_val");
    }   

    public function renderSignCodeValidation(){
        if(!session('sign_id')){
            return to_route('sign');
        }

        return view("modules.Auth.sign_code");
    }   

    public function renderRestore(){
        return view("modules.Auth.restore");
    }

    public function renderRestoreCode(){
        if(!session('restore_mail')){
            return to_route('restore');
        }
        return view("modules.Auth.restore_code");
    }
    
    public function renderChangePass(){
        return view("modules.Auth.restore_change_pass");
    }
}