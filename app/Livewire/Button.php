<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $color;
    public $text;

    public function render()
    {
        return view('livewire.button');
    }
}