<?php

namespace App\Livewire\Song;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
class Songs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $songName = '', $quantity = '10';
    public $genre;
    public $genreId = null;
    public $type;
    public $open = false;

    public $selectedSong;
    
    public function mount($type){
        $this->selectedSong = new Song();
        $this->type = $type;
        $this->genre = new Genre();
    }
    public function updatingSongName(){
        $this->resetPage();
    }
    public function render()
    {
    
        $query = Song::query();

        if($this->type=='edit'||$this->type=='destroy'){
            $query->where(function($q) {
                $q->where('name', 'like', '%'.$this->songName.'%')
                ->where('collab',true)
                ->orWhere('keywords', 'like', '%'.$this->songName.'%');
            });

            $query->orWhere('user_id', Auth::user()->id);
        }else{

            $query->where(function($q) {
                $q->where('name', 'like', '%'.$this->songName.'%')
                
                ->orWhere('keywords', 'like', '%'.$this->songName.'%');
            });



        }


        
        if (!empty($this->genreId)) {
            $query->where('genre_id', $this->genreId);
        }

        
        $songs = $query->paginate($this->quantity);


        $genres = Genre::all();

    
        return view('livewire.song.songs', compact('songs', 'genres'));
    }


    public function showDelete($id){
        $this->open = true;
        $this->selectedSong = Song::find($id);

    }

    public function delete(){
        $this->selectedSong->delete();
        $this->dispatch('alert', 'Canción Eliminada');
        $this->open = false;
    }


}