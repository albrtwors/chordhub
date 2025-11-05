<?php

namespace App\View\Components\news;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class newsCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $version, public $title, public $desc)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news.news-card');
    }
}