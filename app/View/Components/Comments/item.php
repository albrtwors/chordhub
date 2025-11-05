<?php

namespace App\View\Components\Comments;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     */

    public $itemxd;
    public $postype;
    public $route;
    public $postid;
    public function __construct($itemxd, $postype, $route, $postid)
    {
        $this->itemxd = $itemxd;
        $this->postype = $postype;
        $this->route = $route;
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comments.item');
    }
}