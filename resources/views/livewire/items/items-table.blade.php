<div>

    <div class="ms-5">
    <div class="mb-1">
        <button wire:click="$set('createModal', true)" type="button" class="btn btn-primary">
            Crear Item
        </button>
    </div>
    <div class="d-flex mb-5 justify-content-center gap-5">
        <div class="d-flex  gap-3">
            <label for="" class="fw-bold">Paginación</label>
            <select wire:model.live='quantity' name="" class="form-control" id="">
                <option value="">12</option>
                <option value="">24</option>
                <option value="">36</option>
            </select>
        </div>

        <div class="d-flex  gap-3">
            <label  for="" class="fw-bold">Implemento</label>
            <input wire:model.live="name" type="text" placeholder="Guitarra, Violín.." class="form-control">
        </div>


        
    </div>
    <div class="d-flex justify-content-center">
        {{ $items->links() }}
    </div>
    <div class="row gap-1 d-flex justify-content-center">
        @foreach($items as $item)
        <div class="col-xl-3 d-flex gap-3 flex-column align-items-center p-3 justify-content-center bg-white rounded border col-md-5 col-sm-6 col-6">
          
                <h6 class="fw-bold d-flex gap-3 align-items-center">
                    {{ $item->name }}
                    <div class="btn bg-success-subtle text-success">
                        {{ $item->quantity }}
                    </div>
                </h6>



            <img width="100" height="100" src="{{ $item->image ? $item->image->url : 'https://clipart-library.com/2023/musical-notes-2-half-notes-clipart.png' }}" alt="">
            <div class="d-flex justify-content-center gap-2">
                
                <button wire:click="handleModify({{ $item}})" class="btn btn-success">
                    Modificar
                </button>
                <button wire:click="handleDelete({{ $item->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </div>
        </div>
        @endforeach

    </div>
    </div>
    <x-modal :state="$deleteModal">
        <x-slot name="head">
            <h3 class="fw-bold">Eliminar {{ $selectedItem->name }} ?</h3>
        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button wire:click="delete" class="btn btn-primary" wire:click="">Aceptar</button>
            </div>
        </x-slot>        
    </x-modal>


    <x-modal :state="$createModal">
        <x-slot name="head">
            <h4 class="fw-bold">Crear Item</h6>
        </x-slot>
        <x-slot name="content">
            
            
            @if ($createData['image'])
                <div wire:loading.hide wire:target="createData.image" class="d-flex justify-content-center mb-3">
                    <img width="150px" height="150px" class="rounded-circle" src="{{ $createData['image']->temporaryUrl() }}"
                        alt="">
                </div>
            @endif
            <label for="" class="fw-bold">Nombre</label>
            <input class="form-control" wire:model.live="createData.name" type="text" placeholder="Guitarra...">
            <label for="" class="fw-bold">Cantidad</label>
            <input class="form-control" wire:model.live="createData.quantity" type="number" placeholder="2...">
            <label class="fw-bold">Foto de perfil</label>
            <input wire:model.defer="createData.image" type="file" name="imagen" 
                class="form-control">


        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('createModal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="create">Crear</button>
            </div>
        </x-slot>        
    </x-modal>

    <x-modal :state="$modifyModal">
        <x-slot name="head">
            <h3 class="fw-bold">Modificar {{$selectedItem->name}}</h1>
        </x-slot>
        <x-slot name="content">
       
            <label for="" class="fw-bold">Nombre</label>
            <input wire:model.live="modItem.name" type="text" class="form-control">
            <label for="" class="fw-bold">Cantidad</label>
            <input wire:model.live="modItem.quantity" type="text" class="form-control">
            <label for="" class="fw-bold">Imagen</label>
            <input wire:model.live="modItem.image" type="file" class="form-control">
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('modifyModal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="modify">Aceptar</button>
            </div>
        </x-slot>        
    </x-modal>

<script type="module" src="{{ asset('js/Admin/Alerts.js') }}"></script>

</div>
