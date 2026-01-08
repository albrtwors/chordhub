<?php

namespace App\Livewire\Admin;

use App\Models\Chord;
use App\Models\File;
use App\Models\Song;
use Livewire\Component;
use Livewire\WithPagination;

class PostsTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $viewOption = 'song';
    public $quantity = '10';
    public $order = 'id';
    public $name = "";
    public $delete_modal = false;
    public $selectedPost = null;
    public $direction = 'desc';

    public function mount(){
        $this->selectedPost = new Song();
    }

    public function render()
    {   
        if($this->viewOption=='song'){
            $pQuery=Song::where(function($q){
                $q->where('name','like','%'.$this->name.'%');
            });
            $posts=$pQuery->paginate($this->quantity);
        }

        if($this->viewOption=='file'){
            $pQuery=File::where(function($q){
                $q->where('name','like','%'.$this->name.'%');
            });
            $posts=$pQuery->paginate($this->quantity);
        }

        if($this->viewOption=='chord'){
            $pQuery=Chord::where(function($q){
                $q->where('name','like','%'.$this->name.'%');
            });
            $posts=$pQuery->paginate($this->quantity);
        }
        
        return view('livewire.admin.posts-table', compact('posts'));
    }
    public function handleDelete($id){
        $this->delete_modal = true;
        $this->selectedPost = $this->getRightModel($id);

    }
    public function delete($id){
        $post = $this->getRightModel($id);
        $post->delete();
        $this->delete_modal=false;
        $this->dispatch('alert', 'Eliminaste '.$post->name);

        
    }

    protected function getRightModel($id){
        if($this->viewOption=='file'){
            $post = File::find($id);
      
        }elseif($this->viewOption=='song'){
            $post = Song::find($id);
        
        }else{
            $post = Chord::find($id);
          
        }
        return $post;
    }
}