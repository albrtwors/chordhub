<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use Spatie\Permission\Traits\HasRoles;

class UsersTable extends Component
{
   
    use WithPagination;
    //modal vars   
    protected $paginationTheme = 'bootstrap';
    public $open_state = false;
    public $user;
    public $quantity = '10';
    public $delete_modal = false;
    public $userToDelete;
    public $roles;
    public $permissions;
    public $allPermissions;
    public $selectedRoles=[];

    //public rules
    protected $rules = 
    [
        'user.name'=>'required'
    ];


    public function updatingName(){
        $this->resetPage();
    }
    
    //search vars
    public $name = "";
    public $sort = 'id';
    public $direction ='asc';
    protected $listeners = ['render'=>'render'];

    public function mount(){
        $this->user = User::find(1);
        $this->roles = Role::all();
        $this->userToDelete = new User();
        $this->selectedRoles = $this->user->roles->pluck('id')->toArray();
       
        $this->loadPermissions();
    }
    
    public function loadPermissions()
    {
        $this->allPermissions = Permission::all();

        
        $this->permissions = $this->allPermissions->mapWithKeys(function ($permission) {
            return [
                $permission->id => $this->user->hasPermissionTo($permission->name)
            ];
        })->toArray();
        
        $this->dispatch('render');
    }


    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->name.'%')
                        ->orWhere('email', 'like', '%'.$this->name.'%')
                        ->orderBy($this->sort, $this->direction)->paginate($this->quantity);

        return view('livewire.admin.users-table', compact('users'));
    }

    public function order($sort){

        if($this->sort === $sort)
        {
         
            if($this->direction == 'asc')
            {
                $this->direction = 'desc';
            }
            else{
                $this->direction = 'asc';
            }
        }else{
            $this->sort = $sort;
            
        }
    }

    public function togglePermission($permi, $ischecked){
        $this->loadPermissions();
        if($ischecked){
            $this->user->givePermissionTo($permi);
        }else{
            $this->user->revokePermissionTo($permi);
        }
        

        $this->loadPermissions();
       

    }

    public function edit($user){
        
      
        $this->open_state = true;
        $this->user = User::find($user);
        $this->loadPermissions();
    

    }

    public function update(){
       
        $this->user->roles()->sync($this->selectedPermissions);
        $this->user->roles()->sync($this->selectedRoles);

        $this->dispatch('alert', 'Usuario actualizado');
    }
    
    public function delete($id){
        $this->userToDelete = User::find($id);
        $this->delete_modal = true;
    }
    public function deleteFromDb(){
        $this->userToDelete->delete();
        $this->delete_modal = false;
        $this->dispatch('render');
        $this->dispatch('alert', 'Usuario eliminado');
    }
}