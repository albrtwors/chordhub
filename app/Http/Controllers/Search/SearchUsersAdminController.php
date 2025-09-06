<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
class SearchUsersAdminController extends Controller
{
    public function SearchUsers(Request $request){
            $name = $request->username;
        

            $query = User::query();


            if ($name) {
                $query->where('name', 'like', '%' . $name . '%');
            }

    
            $users = $query->paginate(9); 


            return view('modules.Admin.usersIndex', compact('users'));
        
    }
}