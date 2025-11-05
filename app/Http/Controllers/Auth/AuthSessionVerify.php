<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthSessionVerify extends Controller
{
    public static function verifyLoginSession()
    {
        if (!session('user_name')) {
            return true;
        }
    }
}