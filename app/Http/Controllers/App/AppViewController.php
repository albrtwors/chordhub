<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthSessionVerify;
use Illuminate\Http\Request;

class AppViewController extends Controller
{
    

    public function renderApp()
    {

        return view("modules.App.dashboard");
    }

    public function renderProfile()
    {

        return view("modules.App.profile");
    }


}