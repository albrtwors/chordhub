<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($name){
        $users=User::where('name', 'like', '%'.$name.'%')->with('image')->take(3)->get();
        return response()->json(['users'=>$users]);
    }
}