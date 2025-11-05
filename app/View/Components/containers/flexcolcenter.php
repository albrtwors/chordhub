<?php

namespace App\View\Components\containers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class flexcolcenter extends Component
{
    /**
     * Create a new component instance.
     */
    public $gap;
    public function __construct($gap = 1)
    {
        $this->gap = $gap;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.containers.flexcolcenter');
    }
}