<?php

namespace App\View\Components\Comments;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     */

    public $route;
    public $parentid;
    public $postype;
    public $postid;
    public function __construct($route, $parentid, $postype, $postid)
    {
        $this->route = $route;
        $this->parentid = $parentid;
        $this->postype = $postype;
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comments.form');
    }
}