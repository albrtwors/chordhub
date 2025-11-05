<?php

namespace App\View\Components\app;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navItem extends Component
{
    
    public function __construct(public $text,public $icon,public $route, public $isActive)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app.nav-item');
    }
}