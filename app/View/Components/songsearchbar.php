<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class songsearchbar extends Component
{

    public $genre;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($genre, $route)
    {
        $this->genre = $genre;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.songsearchbar');
    }
}