<?php

namespace App\Livewire\File;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
class Files extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $type;
    public $selectedFile;
    public $name = '', $quantity='10';
    public $open = false;
    public function updatingName(){
        $this->resetPage();
        
    }
    public function delete(){
        $this->selectedFile->delete();
        $this->open = false;
        $this->dispatch('alert', 'Cancionero eliminado');
    }
    public function showDelete($id){
        $this->selectedFile = File::find($id);
        $this->open = true;
    }
    public function mount($type){
        $this->type=$type;
        $this->selectedFile = new File();

    }
    public function render()
    {
        if($this->type=='show'){
            $lists = File::where('name', 'like', '%'.$this->name.'%')->paginate($this->quantity);
        }else{
            $lists = File::where('name', 'like', '%'.$this->name.'%')
                            ->where('user_id', Auth::user()->id) 
                            ->paginate($this->quantity);
        }
        
        return view('livewire.file.files', compact('lists'));
    }
}