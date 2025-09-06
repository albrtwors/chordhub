<?php

namespace App\View\Components\Comments;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comments extends Component
{
    /**
     * Create a new component instance.
     */

    public $list;
    public $postype;
    public $route;
    public $postid;
    public function __construct($list, $postype, $route, $postid)
    {
        $this->list=$list;
        $this->postype = $postype;
        $this->route = $route;
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comments.comments');
    }
}