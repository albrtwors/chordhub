<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AdminController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('can:admin.access', only: ['usersIndex']),
            new Middleware('can:admin.usersIndex', only: ['usersIndex']),
            new Middleware('can:admin.usersEdit', only: ['usersEdit']),
            new Middleware('can:admin.genresIndex', only: ['genreIndex']),
            new Middleware('can:admin.commentsIndex', only: ['commentsIndex']),

           
           
        ];
    }
    public function usersIndex()
    {
        return view('modules.Admin.usersIndex');
    }
    
    public function usersEdit($id)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $user = User::find($id);
        return view('modules.Admin.usersEdit', compact(['user', 'roles', 'permissions']));
    }
    
    public function usersDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['status'=>'success', 'message'=>'Usuario Eliminado']);
    }
    
        public function usersUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);


        $roles = $request->input('roles', []); 
        $user->syncRoles($roles);


        $permissions = $request->input('permissions', []); 
        $user->syncPermissions($permissions);


        return response()->json(['status'=>'success', 'message'=>'Usuario actualizado']);
    }
    public function genreIndex()
    {
        
        return view('modules.Admin.genreIndex');
    }

    public function commentsIndex(){
        return view('modules.Admin.commentsIndex');
    }
    public function songsIndex()
    {
        //
    }
    public function fileIndex()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}