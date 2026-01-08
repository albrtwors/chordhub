<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function getUserPermissions(){
        return response()->json(['permissions'=>Auth::user()->permissions]);
    }
}