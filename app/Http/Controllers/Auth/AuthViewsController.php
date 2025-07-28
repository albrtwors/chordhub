<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthViewsController extends Controller
{
    public function renderLogin(){
        return view("modules.Auth.login");
    }

    public function renderSign(){
        return view("modules.Auth.sign");
    }

    public function renderSignCodeValidation(){
        if(!session('sign_name')){
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