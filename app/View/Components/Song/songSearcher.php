<?php

namespace App\View\Components\song;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class songSearcher extends Component
{
    /**
     * Create a new component instance.
     */

    public $songs;
    public function __construct($songs)
    {
        $this->songs = $songs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.song.song-searcher');
    }
}