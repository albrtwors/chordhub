<?php

namespace App\Livewire\Form;

use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class ImageForm extends Component
{
    use WithFileUploads;
    public $selectedImage;
    public $existingImageUrl;
    public $songId;
    public $userId;
    protected $rules = [
        'selectedImage' => 'image|max:2048|nullable'
    ];
    protected $previewMimes = ['jpeg', 'png', 'gif', 'jpg'];

    public function mount($songId = null, $existingImageUrl = null, $userId=null){
        $this->songId = $songId;
        $this->existingImageUrl = $existingImageUrl;
        $this->userId = $userId;
    }
    public function render()
    {
      
        return view('livewire.form.image-form');
    }

    public function deleteImage(){
        if($this->songId){
            $song = Song::find($this->songId);
            if($song->image){
                
                $pfp = str_replace( '/storage/', '', $song->image->url);
                Storage::disk('public')->delete($pfp);
                $song->image()->delete();
            }
            

        }

        if($this->userId){
            $user= User::find($this->userId);

            if($user->image){
                $pfp = str_replace( '/storage/', '', $user->image->url);
                Storage::disk('public')->delete($pfp);
                if($user->image){
                    $user->image()->delete();
                }
       


            }


        }
        
        $this->selectedImage = null;
        $this->existingImageUrl = null;
    }
}