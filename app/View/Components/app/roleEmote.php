<?php

namespace App\View\Components\app;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class roleEmote extends Component
{
    /**
     * Create a new component instance.
     */
    public $role;
    public function __construct($role)
    {
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app.role-emote');
    }
}