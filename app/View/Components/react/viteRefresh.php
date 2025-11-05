<?php

namespace App\View\Components\react;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class viteRefresh extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $path)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.react.vite-refresh');
    }
}