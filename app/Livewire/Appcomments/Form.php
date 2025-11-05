<?php

namespace App\Livewire\Appcomments;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $comment = "";
  
    protected $listeners = ['render'=>'render'];
    public $parentId, $postId, $type, $route;
    public function mount($parentId = null, $postId = null, $type = null, $route = null){
        $this->parentId = $parentId;
        $this->postId = $postId;
        $this->type = $type;
        $this->route = $route;
    }
    public function render()
    {
        return view('livewire.appcomments.form');
    }
    public function save(){
        $this->validate([
            'comment'=>'required|min:3'
        ]);
        $data = [
            'comment'=>$this->comment,
            'parent_id'=>$this->parentId,
            'commentable_id'=>$this->postId,
            'commentable_type'=>$this->type,
            'user_id'=>Auth::user()->id
        ];
     
        \App\Models\Comment::create($data);
    
        $this->reset('comment');
       
        $this->dispatch('refreshComments');
        $this->dispatch('render');
    }
}