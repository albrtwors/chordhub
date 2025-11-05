<?php

namespace App\Livewire\File;

use App\Models\Genre;
use App\Models\Song;
use Livewire\Component;
use Livewire\WithPagination;

class FileSongs extends Component
{
    use WithPagination;
    public $allSongs;
    public $name = '';
    public $quantity = '10';
    public $genre;
    public $genres;
    protected $paginationTheme = 'bootstrap';

    public function updatingName(){
        $this->resetPage();
    }
    public function mount($songs){
        $this->allSongs = $songs;
        $this->genres = Genre::all();
        
        
    }

    public function render()
    {
        $songs=Song::query();
        
        $songs->where('name', 'like', '%'.$this->name.'%');
        if($this->genre){
            $songs->where('genre_id', $this->genre);
        }
        
        $songs=$songs->paginate($this->quantity);
      
        
        $genres = $this->genres;
        return view('livewire.file.file-songs', compact(['songs', 'genres']));
    }
}