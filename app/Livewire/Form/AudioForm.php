<?php

namespace App\Livewire\Form;

use App\Models\Song;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AudioForm extends Component
{
    use WithFileUploads;
    public $selectedAudio;
    public $existingAudioUrl;
    public $songId;
    public $userId;
    
    public function mount($songId = null, $existingAudioUrl = null, $userId=null){
        $this->songId = $songId;
        $this->existingAudioUrl = $existingAudioUrl;
        $this->userId = $userId;
    }
    
    public function render()
    {
        return view('livewire.form.audio-form');
    }
   
    public function deleteAudio(){
        $this->selectedAudio=null;
        $song = Song::find($this->songId);
        if($song->audio){
            $song->audio()->delete();
            
        }
    }
}