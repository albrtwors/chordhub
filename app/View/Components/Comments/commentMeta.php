<?php

namespace App\View\Components\comments;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class commentMeta extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $type, public $id)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comments.comment-meta');
    }
}