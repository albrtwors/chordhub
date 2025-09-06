<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        
        return view('modules.admin.genreIndex');
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