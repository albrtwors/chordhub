<?php

namespace App\Livewire\Appcomments;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $commentList, $postId, $type, $route;
    public $parentId = null;
    public $hasResponses = false;
    protected $listeners = ['render'=>'render', 'refreshComments'=>'refreshComments'];

    public function refreshComments()
    {
        
        if(!$this->hasResponses){
            $this->commentList = \App\Models\Comment::where('commentable_id', $this->postId)
                ->where('commentable_type', $this->type)
                ->whereNull('parent_id')->get();
        }else{
            $this->commentList = \App\Models\Comment::where('commentable_id', $this->postId)
                ->where('commentable_type', $this->type)
                ->where('parent_id', $this->parentId)->get();
        }
    }

    public function mount( $postId, $type, $route, $hasResponses, $parentId=null){
        if(!$hasResponses){
            $this->commentList = Comment::where('commentable_id', $postId)->where('commentable_type', $type)->whereNull('parent_id')->get();
            $this->hasResponses = false;
        }else{
            $this->commentList = Comment::where('commentable_id', $postId)->where('commentable_type', $type)->where('parent_id', $parentId)->get();
            $this->hasResponses = true;
            $this->parentId = $parentId;
        }
       

        $this->postId = $postId;
        $this->type = $type;
        $this->route = $route;
    }

    public function render()
    {
        if(!$this->hasResponses){
            $comments = Comment::where('commentable_id', $this->postId)
                ->where('commentable_type', $this->type)
                ->whereNull('parent_id')->get();
        }else{
            $comments = Comment::where('commentable_id', $this->postId)
                ->where('commentable_type', $this->type)
                ->where('parent_id', $this->parentId)->get();
        }
        return view('livewire.appcomments.comments', compact('comments'));
    }
}