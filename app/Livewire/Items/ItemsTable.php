<?php

namespace App\Livewire\Items;

use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class ItemsTable extends Component
{
  
    use WithFileUploads;
    use WithPagination;
    public $selectedItem;
    public $modItem = ['image'=>null];
    protected $paginationTheme = 'bootstrap';
    //createData
    public $createData = [
        'name'=>null,
        'quantity'=>null,
        'image'=>null
    ];
    public $name = '';
    public $quantity = '12';
    //modal
    public $deleteModal = false;
    public $createModal = false;
    public $modifyModal = false;
    
    public function mount(){
        $this->selectedItem = new Item();
    }

    public function delete(){
        Item::find($this->selectedItem->id)->delete();
        $this->deleteModal=false;
        $this->dispatch('alert', 'Item Eliminado');
    }
    public function handleDelete($id){
        $this->selectedItem = Item::find($id);
        $this->deleteModal=true;
    }
    public function render()
    {
        $items = Item::where('name', 'like', '%'.$this->name.'%')->paginate($this->quantity);

        return view('livewire.items.items-table', compact('items'));
    }
    public function handleModify($item){
        $this->modifyModal=true;
        $this->modItem=$item;
    }


    public function modify(){
        $item = Item::find($this->modItem['id']);
        $item->update(['name'=>$this->modItem['name'],'quantity'=>$this->modItem['quantity']]);
        if($this->modItem['image']){
            $url = $this->modItem['image']->store('items', 'public');
            $global = Storage::url($url);
            if($item->image){
                $item->image()->update(['imageable_type'=>'App\Models\Item', 'url'=>$global]);
            }else{
                $item->image()->create(['imageable_type'=>'App\Models\Item', 'url'=>$global]);
            }
            

        }
        $this->modifyModal=false;
        $this->dispatch('alert', 'Item Modificado');
    }
    public function create(){

        $this->createModal = false;
        $item = Item::create(['name'=>$this->createData['name'], 'quantity'=>$this->createData['quantity']]);
        if($this->createData['image']){
            $url = $this->createData['image']->store('items', 'public');
            $global = Storage::url($url);
            $item->image()->create(['imageable_type'=>'App\Models\Item', 'url'=>$global]);
            

        }
        $this->dispatch('alert', 'Item Creado');
        
    }
}