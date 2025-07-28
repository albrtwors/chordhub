<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthSessionVerify;
use Illuminate\Http\Request;

class AppViewController extends Controller
{
    

    public function renderApp()
    {
        if(AuthSessionVerify::verifyLoginSession()) {
            return redirect()->route('login');
        }
        return view("modules.App.dashboard");
    }

    public function renderProfile()
    {
        if(AuthSessionVerify::verifyLoginSession()) {
            return redirect()->route('login');
        }
        return view("modules.App.profile");
    }


}