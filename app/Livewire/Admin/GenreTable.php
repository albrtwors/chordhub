<?php

namespace App\Livewire\Admin;

use App\Models\Genre;
use Livewire\Component;
use Livewire\WithPagination;
class GenreTable extends Component
{
    use WithPagination;
    public $selectedGenre;
    public $createModal = false;
    public $deleteModal = false;
    public $updateModal = false;
    public $name = '';
    public $order = 'id';
    public $sort = 'asc';
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'render'=>'render'
    ];
    public $quantity = '10';

    public $genreName = '';
    public $genreUpdateName;
    

    public function mount(){
      $this->selectedGenre = new Genre();
    }
    public function render()
    {
        $genres = Genre::where('name', 'LIKE', '%'.$this->name.'%')->orderBy($this->order, $this->sort)->paginate($this->quantity);
        return view('livewire.admin.genre-table', compact('genres'));
    }
    public function updatingName(){
        $this->resetPage();
    }
    public function sorting($name){
        
        if($name === $this->order){
            if($this->sort === "asc"){
                $this->sort = "desc";
            }else{
                $this->sort = "asc";
            }
        }else{
            $this->order = $name;
        }
        $this->dispatch('render');
    }
    public function deleteHandler($gen){
        $this->selectedGenre = Genre::find($gen);

        $this->deleteModal = true;
      

    }
    public function deleteGenre(){
        $this->selectedGenre->delete();
        $this->reset(['genreName', 'deleteModal']);
        $this->dispatch('alert', 'Genero eliminado');
    }
    public function updateHandler($gen){
        $this->selectedGenre = Genre::find($gen);
        $this->genreName = $this->selectedGenre->name;
        $this->updateModal = true;
      

    }
    public function updateGenre(){
        $this->selectedGenre->update([
            'name'=>$this->genreName
        ]);
        $this->reset(['genreName', 'updateModal']);
        $this->dispatch('alert', 'Genero Actualizado');
    }
    public function createGenre(){
    
        Genre::create(['name'=>$this->genreName]);
        $this->dispatch('alert', 'Canción creada');
        $this->dispatch('render');
        $this->reset(['genreName', 'createModal']);
    }
}