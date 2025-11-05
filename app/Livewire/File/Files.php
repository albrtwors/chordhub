<?php

namespace App\Livewire\File;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;
class Files extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $type;
    public $ownFiles = false;
    public $collabFiles = false;
    protected $userUpload = false;
    public $selectedFile;
    public $name = '', $quantity='10';
    public $open = false;
    public function updatingName(){
        $this->resetPage();
        
    }
    public function delete(){
        
        $file = $this->selectedFile;

        if (! Gate::allows('delete-file', $file)) {
            $this->dispatch('alertError', 'No autorizado');
            $this->open = false;
            return;

        }
        
        $this->selectedFile->delete();
        $this->open = false;
        $this->dispatch('alert', 'Cancionero eliminado');
    }
    public function showDelete($id){
        $this->selectedFile = File::find($id);
        $this->open = true;
    }
    public function mount($type, $userUpload = false){
        $this->type=$type;
        $this->selectedFile = new File();
        $this->userUpload = $userUpload;

    }
    public function render()
    {
        $query = File::query();
        if($this->type==='edit'){
            if($this->collabFiles){
                $query->where(function ($q){
                    $q->where('name', 'like', '%'.$this->name.'%');
                 
                });
                $query->collabs();
            }else{
                $query->where(function ($q){
                    $q->where('user_id', Auth::user()->id);
                });
            }
        } 
                  
        elseif($this->type==='destroy'){
            $query->where(function ($q){
                $q->where('name', 'like', '%'.$this->name.'%');
                

            });
            $query->where('user_id', Auth::user()->id);
        }
        else{
            $query->where('name', 'like', '%'.$this->name.'%');
            
            if($this->ownFiles){
                $query->where('user_id', Auth::user()->id);
            }
                           
                            
        }

        $lists = $query->paginate($this->quantity);
        return view('livewire.file.files', compact('lists'));
    }
}