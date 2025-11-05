<?php

namespace App\Livewire\Chord;
use App\Models\Song;
use App\Models\Chord;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Livewire\Component;
use Livewire\WithPagination;

class Chords extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $songName = '', $quantity = '10';
    public $genre;
    public $collabChords = false;
    public $ownChords = false;
    public $userUpload;
    public $selectedChord;
    public $type = 'view';
    public $genreId = null;
    public $deleteModal = false;
    public function mount($type, $userUpload = false){
        $this->genre = new Genre();
        $this->type = $type;
        $this->userUpload = $userUpload;
    }
    public function updatingSongName(){
        $this->resetPage();
    }
    public function render()
    {
    
        $query = Song::query();

        if($this->type=='create'){
            $query->where('name', 'like', '%'.$this->songName.'%')
                  ->orWhere('keywords', 'like', '%'.$this->songName.'%');
    
   
        }elseif($this->type=='edit'){
            if($this->collabChords){
                $query->where(function($q){
                    $q->where('name', 'like', '%'.$this->songName.'%')
                    ->orWhere('keywords', 'like', '%'.$this->songName.'%');
                });
                
                $query->whereHas('chords', function($q){
                    $q->collabs();
                });
            }else{
                $query->where(function($q){
                    $q->where('name', 'like', '%'.$this->songName.'%')
                    ->orWhere('keywords', 'like', '%'.$this->songName.'%');
                });
                $query->whereHas('chords');
                $query->whereHas('chords', function($q){
                    $q->where("user_id", Auth::user()->id);
                
                });


            }

        }elseif($this->type=='delete'){
                $query->where(function($q){
                $q->where('name', 'like', '%'.$this->songName.'%')
                  ->orWhere('keywords', 'like', '%'.$this->songName.'%');
            });
            $query->whereHas('chords');  
            $query->whereHas('chords', function($q){
                $q->where('user_id', Auth::user()->id);
            });
            
           
        }else{
            if($this->ownChords){
                $query->where(function($q){
                    $q->where('name', 'like', '%'.$this->songName.'%')
                    ->orWhere('keywords', 'like', '%'.$this->songName.'%');

                });
                $query->whereHas('chords', function($q){
                    $q->where('user_id', Auth::user()->id);
                });
            }else{
                $query->where(function($q){
                    $q->where('name', 'like', '%'.$this->songName.'%')
                    ->orWhere('keywords', 'like', '%'.$this->songName.'%');

                });
                $query->whereHas('chords');   
            }


         

        }

        
        if (!empty($this->genreId)) {
            $query->where('genre_id', $this->genreId);
        }

        

        
        $songs = $query->paginate($this->quantity);


        $genres = Genre::all();

    
        return view('livewire.chord.chords', compact('songs', 'genres'));
    }

    public function showDeleteModal($chord){
        $this->deleteModal = true;
        $this->selectedChord = Chord::find($chord['id']);
    }
    public function delete(){
        $this->selectedChord->delete();
        $this->deleteModal = false;
        $this->dispatch('render');
        $this->dispatch('alert', 'Acordes eliminados correctamente');
    }
}