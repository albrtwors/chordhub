<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $nombre = "";
    
    public function mount($name){
        $this->nombre = $name;
    }
    
    public function render()
    {
        return view('livewire.hello-world');
    }
}