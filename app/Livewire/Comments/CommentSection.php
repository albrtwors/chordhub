<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class CommentSection extends Component
{
    protected $listeners=[
        'render'=>'render'
    ];
    public $parentId;
    public $posType;
    public $postId;
    public $route;
    public $comments; 
    public $list;
    public $isResponse;
    public function mount($postid, $postype, $parentid = null, $comments = null, $isResponse = false){
    
        $this->isResponse = $isResponse;
        $this->postId = $postid;
        $this->posType = $postype;
        $this->parentId = $parentid;
        if(!$comments){
            $this->comments = Comment::where('commentable_id', $postid)->where('commentable_type',$postype)->where('parent_id', null)->get();
        }else{
            $this->comments = $comments;
        }
        
        
    }
    public function render()
    {
     
        
        if(!$this->isResponse){
            $this->comments = Comment::where('commentable_id', $this->postId)->where('commentable_type',$this->posType)->where('parent_id', null)->get();
        }
        return view('livewire.comments.comment-section');
          
    }

  
  
}