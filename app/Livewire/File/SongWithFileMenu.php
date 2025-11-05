<?php

namespace App\Livewire\File;

use App\Models\Tonality;
use Livewire\Component;

class SongWithFileMenu extends Component
{
    public $file;
    public $song;
 
    public function mount($file, $song){
        $this->file = $file;
        $this->song = $song;
      
    }
    public function render()
    {

        $tonalities = Tonality::all();
     
        return view('livewire.file.song-with-file-menu', compact('tonalities'));
    }
    public function changeNextSong() {
        $songs = $this->file->songs;

        $currentIndex = $songs->search(function($item) {
            return $item->id === $this->song->id;
        });

        if ($currentIndex !== false) {
            $nextIndex = $currentIndex + 1;

            if ($nextIndex >= $songs->count()) {
                $nextIndex = 0; 
            }

        
            $this->song = $songs->get($nextIndex);
            $this->dispatch('songChanged', $this->song->structure);
        } else {
            
            $this->song = $songs->first();
            $this->dispatch('songChanged', $this->song->structure);
        }
    }
}