<?php

namespace App\Livewire\Practices;

use Livewire\Component;

class OwnPractices extends Component
{
    public $practices;
    public function mount($practices){
        $this->practices=$practices;

    }
    public function render()
    {
        return view('livewire.practices.own-practices');
    }
}