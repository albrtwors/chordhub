<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $text;
    public $parentId = null;
    public $postId;
    public $commentId;
    public $posType;
    public $isFirstComment;
    public $commentText = "";
    protected $listeners = [
        'render'=>'render'
    ];
    public function mount($postId, $posType, $parentId = null, $isFirstComment = true, $commentId = 1929913){
        $this->postId = $postId;
        $this->posType = $posType;
        $this->parentId = $parentId;
        $this->isFirstComment = $isFirstComment;
        $this->commentId = $commentId;
    }   
    public function render()
    {
        return view('livewire.comments.form');
    }

    public function save(){
        if($this->parentId){

            Comment::create(['comment'=>$this->commentText,
                            'commentable_type'=>$this->posType,
                            'user_id'=>Auth::user()->id,
                            'parent_id'=>$this->parentId,
                            'commentable_id'=>$this->postId,
            ]);

        }else{

            Comment::create(['comment'=>$this->commentText,
                            'commentable_type'=>$this->posType,
                            'user_id'=>Auth::user()->id,
                            'commentable_id'=>$this->postId,
            ]);

        }


    $this->reset(['commentText']);
    $this->dispatch('render');
    }
}