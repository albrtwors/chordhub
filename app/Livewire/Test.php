<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Test extends Component
{

    public $nombre = "";
    public function mount(){
       
    }   
    public function render()
    {
        $user = User::where('name', 'like', '%'.$this->nombre.'%')->get();
        return view('livewire.test', compact('user'));
    }
}