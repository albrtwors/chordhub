<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class GenericModal extends Component
{
    //modal vars   
    public $open_state = false;
    public $user;
    public $item;
    public $roles;
    public $permissions;
    public $selectedPermissions=[];
    public $selectedRoles=[];

    //public rules
    protected $rules = 
    [
        'user.name'=>'required'
    ];

  

    public function mount($item){
        $this->item = $item;
        $this->user = User::find(41);
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }
    
    public function render()
    {

        return view('livewire.admin.generic-modal');
    }

    public function edit(User $user){

        $this->open_state = true;
        
        $this->user = $user;
    }

    public function update(){
       
        $this->user->roles()->sync($this->selectedPermissions);
        $this->user->roles()->sync($this->selectedRoles);

        $this->dispatch('alert', 'Usuario actualizado');
    }
}