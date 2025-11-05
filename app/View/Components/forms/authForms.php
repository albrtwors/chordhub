<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class authForms extends Component
{
    /**
     * Create a new component instance.
     */
    
    public function __construct(public $placeholder, public $type = 'user')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.auth-forms');
    }
}