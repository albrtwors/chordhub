<?php

namespace App\Livewire\Admin;
use App\Models\User;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
class CommentsTable extends Component
{
    use WithPagination;
    public $name = "";
    public $deleteModal = false;
    public $quantity = '10';
    protected $paginationTheme = 'bootstrap';
    public $order = 'id';
    public $user;
    public $selectedComment;
    public $sort = 'asc';
    public $commentModal = false;
    protected $listener = ['render'=>'render'];
    public function updatingName(){
        $this->resetPage();
      
        
        
    }
    public function mount(){
        $this->user = New User();
        $this->selectedComment = new Comment();
    }
    public function showFullText($comment)
    {
        $this->commentModal = true;
        $this->user = User::find($comment['user_id']);
        $this->selectedComment = $comment;
       
        
    }
    public function showDeleteModal($comment)
    {
        $this->deleteModal = true;
        $this->user = User::find($comment['user_id']);
        $this->selectedComment = $comment;
    }
    public function deleteComment(){
        $comment = Comment::find($this->selectedComment['id']);
        $comment->delete();
        $this->deleteModal = false;
        $this->dispatch('render');
        $this->dispatch('alert', 'Eliminado correctamente');
    }
    public function render()
    {
        $comments = Comment::where('comment','like','%'.$this->name.'%')
                            ->orWhere('commentable_type','like','%'.$this->name.'%')
                            ->orWhereHas('user', function($query){
                                $query->where('name','like','%'.$this->name.'%');
                            })
                            ->orWhereHas('commentable', function($query){
                                $query->where('name','like','%'.$this->name.'%');
                            })
                            ->orderBy($this->order, $this->sort)
                            ->paginate($this->quantity);
        return view('livewire.admin.comments-table', compact('comments'));
    }
    public function sorting($param){
        if($this->order == $param){
          
            if($this->sort == 'asc'){
                $this->sort = 'desc';
            }else{
                $this->sort = 'asc';
            }

        }else{
            $this->order = $param;
        }
    }
}