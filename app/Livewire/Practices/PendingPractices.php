<?php

namespace App\Livewire\Practices;

use Livewire\Component;

class PendingPractices extends Component
{
    public $practices;
    public function mount($userPractices){
        $this->practices=$userPractices;
    }
    public function render()
    {

        return view('livewire.practices.pending-practices');
    }
}