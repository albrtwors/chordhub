<?php

namespace App\Livewire\Chord;

use App\Models\Chord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class ChordVersions extends Component
{   
    use WithPagination;
    public $selectedSong;
    public $open = false;
    public $type;
    public $ownVersions = false;
    public $collabVersions = false;
    public $selectedChord;
    public $quantity = '12';
    public $chordName = '';
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['render'=>'render'];

    public function updatingChordName(){
        $this->resetPage();
    }

    public function mount($song, $type=null){
        $this->selectedSong = $song;
        $this->type = $type;
        $this->selectedChord = new Chord();
    }

    public function render()
    {
      
        $query = Chord::query();
        $song = $this->selectedSong;
        
        if($this->type=='show'){
            if($this->ownVersions){
                $query->where('name','like','%'.$this->chordName.'%');
                $query->where('user_id', Auth::user()->id);
            }else{
                $query->where('name','like','%'.$this->chordName.'%');
            }
            
                  
        }

        elseif($this->type=='edit'){
            
            if($this->collabVersions){
                $query->where(function($q) {
                    $q->where('name', 'like', '%'.$this->chordName.'%');
                    
                });
                $query->collabs();

            }else{
                $query->where(function($q) {
                    $q->where('name', 'like', '%'.$this->chordName.'%')
                    ->where('user_id', Auth::user()->id);
                    
                });
            }

           
        }elseif($this->type=='delete'){
            $query->where(function($q) {
                $q->where('name', 'like', '%'.$this->chordName.'%')
                ->where('user_id', Auth::user()->id);
                
            });

        }

        $query->where('song_id',$song->id);
        $chords = $query->paginate($this->quantity);
        return view('livewire.chord.chord-versions', compact(['song', 'chords']));
    }

    public function deleteModal($id){
        $this->open = true;
        $this->selectedChord = Chord::find($id);
    }

    public function delete(){
    
        if(!Gate::allows('delete-chord', $this->selectedChord)){
            $this->dispatch('alertError', 'No tienes permisos');
            $this->open = false;
            return;
        }
        $this->selectedChord->delete();
        $this->dispatch('render');
        $this->open = false;
        $this->dispatch('alert', 'Canción Eliminada');
    }
}