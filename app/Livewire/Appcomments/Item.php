<?php

namespace App\Livewire\Appcomments;

use Livewire\Component;

class Item extends Component
{
    public $comment, $postId, $type, $route;
    protected $listeners = ['render'=>'render'];
    public function mount($comment, $postId, $type, $route){
        $this->comment = $comment;
        $this->postId = $postId;
        $this->type = $type;
        $this->route = $route;
    }
    public function render()
    {
        return view('livewire.appcomments.item');
    }
}