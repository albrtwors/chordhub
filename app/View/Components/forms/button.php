<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public $color;
    public $submit;
    public function __construct($text, $color = 'primary', $submit = false)
    {
        $this->text = $text;
        $this->color = $color;
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.button');
    }
}