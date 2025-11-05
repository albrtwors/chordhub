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
    public $user, $userName, $userRoles, $userPermissions;
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
    public $order = 'id';
    public $direction ='asc';
  
    protected $listeners = ['render'=>'render'];

    public function mount(){
        $this->user = User::find(1);
        $this->roles = Role::all();
        $this->userToDelete = new User();
        $this->selectedRoles = $this->user->roles->pluck('id')->toArray();
        $this->userPermissions = $this->user->permissions->pluck('id')->toArray();
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
        
       
    }


    public function render()
    {
      
        $users = User::where('name', 'like', '%'.$this->name.'%')->orWhere('email', 'like', '%'.$this->name.'%')->orderBy($this->order, $this->direction)->paginate($this->quantity);
            
     
        return view('livewire.admin.users-table', compact('users'));
    }


    public function sorting($name){
        
       
        if($name === $this->order){
            if($this->direction === 'asc'){
                $this->direction = 'desc';
            }else{
                $this->direction = 'asc';
            }
        }else{
            $this->order = $name;
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

    public function edit($us){
        
        
        
        $this->user = User::find($us);
        $this->userName = $this->user->name;
        $this->userRoles = $this->user->roles;
        $this->userPermissions = $this->user->permissions->pluck('id')->toArray();
        $this->loadPermissions();
        $this->dispatch('render');
        $this->open_state = true;

    }

    public function closeModal(){
        $this->open_state = false;
        $this->dispatch('render');
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