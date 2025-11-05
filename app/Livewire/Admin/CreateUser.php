<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateUser extends Component
{
    public $open = false;
    public $email = "";
    public $name = "";
    public $password = "";
    
    protected $rules = [

        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    ];
    public function render()
    {
        return view('livewire.admin.create-user');
    }
    public function openmodal($state){
        $this->open = $state;
    }

public function save()
{
    try {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT),
            'active' => 1,
        ])->assignRole('visitor');

        $this->dispatch('render');
        $this->dispatch('alert');
        $this->reset(['password', 'email', 'name']);

    } catch (\Illuminate\Validation\ValidationException $e) {
     
        $errors = $e->validator->errors()->all();
        $this->dispatch('alertError', $errors[0]);


    }
}

    
}