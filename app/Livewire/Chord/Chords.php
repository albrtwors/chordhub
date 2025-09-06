<?php

namespace App\Livewire\Chord;
use App\Models\Song;
use App\Models\Genre;
use Livewire\Component;
use Livewire\WithPagination;
class Chords extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $songName = '', $quantity = '10';
    public $genre;
    public $genreId = null;
    public function mount(){
        $this->genre = new Genre();
    }
    public function updatingSongName(){
        $this->resetPage();
    }
    public function render()
    {
    
        $query = Song::query();

    
        $query->where(function($q) {
            $q->where('name', 'like', '%'.$this->songName.'%')
            ->orWhere('keywords', 'like', '%'.$this->songName.'%');
        });

        
        if (!empty($this->genreId)) {
            $query->where('genre_id', $this->genreId);
        }

        
        $songs = $query->paginate($this->quantity);


        $genres = Genre::all();

    
        return view('livewire.Chord.chords', compact('songs', 'genres'));
    }
}