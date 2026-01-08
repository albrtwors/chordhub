<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class OwnModal extends Component
{
    use WithFileUploads;
    public $open = false;
    public $email = "";
    public $name = "";
    public $imagen;
    public $random;
    public $password = "";
    public $state = false;
    protected $rules = [

        'email' => 'required|email|unique:users,email',
        'name' => 'required|min:8|max:15|regex:/^[a-zA-Z][a-zA-Z0-9]{7,14}$/|unique:users,name',
        'password' => 'required|regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/',
        'imagen'=>'nullable|image|max:2048'
    ];

    public function mount(){
        $this->random = rand(1,999);
    }

    public function save()
    {
    try {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT),
            'active' => 1,
        ])->assignRole('visitor');
        if($this->imagen){
            $image = $this->imagen->store('images','public');
            $user->image()->create([
                'url'=>Storage::url($image)
            ]);
        }

        $this->random = rand(1,999);
        $this->state = false;
        $this->dispatch('render');
        $this->dispatch('alert', 'Usuario Creado');
        $this->reset(['password', 'email', 'name', 'imagen']);

    } catch (\Illuminate\Validation\ValidationException $e) {
     
        $errors = $e->validator->errors()->all();
        $this->state = false;
        $this->dispatch('alertError', $errors[0]);


    }}
    public function render()
    {
        return view('livewire.admin.own-modal');
    }
    public function setState()
    {
        $this->random = rand(1,999);
        $this->state = false;
        $this->reset(['state', 'name', 'email', 'imagen', 'password', 'open']);
    }
}