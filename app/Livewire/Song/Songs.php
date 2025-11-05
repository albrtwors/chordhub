<?php

namespace App\Livewire\Song;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Author;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
class Songs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $collabSongs = false;
    public $ownSongs = false;
    public $songName = '', $quantity = '10';
    public $genre;
    public $genreId = null;
    public $type;
    public $userUpload;
    public $open = false;
    public $author = "";
    public $selectedSong;
    
    public function mount($type, $userUpload = false){
        $this->selectedSong = new Song();
        $this->type = $type;
        
        $this->genre = new Genre();
        $this->userUpload = $userUpload;
    }
    public function updatingSongName(){
        $this->resetPage();
    }
    public function render()
    {
    
        $query = Song::query();

        if($this->type=='edit'){
            if($this->collabSongs){
                $query->where(function($q) {
                            $q->where('name', 'like', '%'.$this->songName.'%')
                            ->orWhere('keywords', 'like', '%'.$this->songName.'%');

                        });

                $query->collabs();
                        
            }else{
                $query->where(function($q) {
                    $q->where('name', 'like', '%'.$this->songName.'%')
                    ->orWhere('keywords', 'like', '%'.$this->songName.'%');
                });

                $query->where('user_id', Auth::user()->id);
                
            }
        

        }
        elseif($this->type=='destroy'){
            $query->where(function($q) {
                $q->where('name', 'like', '%'.$this->songName.'%')
                ->orWhere('keywords', 'like', '%'.$this->songName.'%');
            });

            $query->where('user_id', Auth::user()->id);
        }
        else{
            if($this->ownSongs){
                $query->where(function($q) {
                    $q->where('name', 'like', '%'.$this->songName.'%')
                      ->orWhere('keywords', 'like', '%'.$this->songName.'%');
                   
                    
                });
                $query->where('user_id', Auth::user()->id);
            }else{

                $query->where(function($q) {
                    $q->where('name', 'like', '%'.$this->songName.'%')
                      ->orWhere('keywords', 'like', '%'.$this->songName.'%');
                });


            }




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
        $song = $this->selectedSong;
        
        if(!Gate::allows('delete-song', $song)){
            $this->dispatch('alertError', 'No autorizado');
            $this->open = false;
            return;
        }
        $this->selectedSong->comments()->delete();
        $this->selectedSong->delete();
        $this->dispatch('alert', 'Canción Eliminada');
        $this->open = false;
    }


}