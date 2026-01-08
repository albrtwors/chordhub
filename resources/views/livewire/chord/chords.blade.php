<div>
    <div style="overflow-x:scroll" class="mx-5 d-flex gap-3">
       
            @if ($type == 'create')
            @elseif($type == 'edit')
            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Permisos</label>
                <select wire:model.live="collabChords" class="form-control">
                    <option value="{{ false }}">Canciones con Acordes Propios</option>
                    <option value="{{ true }}">Canciones con Acordes Colaborativos</option>
                </select>
            </div>
            @elseif($type == 'delete')
            @else
            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Permisos</label>
                <select wire:model.live="ownChords" class="form-control">
                    <option value="{{ false }}">Todas las Canciones con Acordes</option>
                    <option value="{{ true }}">Canciones con acordes propios</option>
                </select>
            </div>
            @endif
            <div class="d-flex gap-2 flex-column">
            <label for="" class="fw-bold">Paginación</label>    
            <select wire:model.live="quantity" class="form-control">
                <option value="12">12</option>
                <option value="36">36</option>
                <option value="54">54</option>
            </select>
            </div>

            <div class="d-flex gap-2 flex-column">
            
                <label for="" class="fw-bold">Nombre</label>    
                <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">
                    
            </div>

            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Género</label>    
                <select wire:model.live="genreId" class="form-control">
                    <option value="{{ null }}">Todos</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
      

    </div>

    <div class="d-flex justify-content-center mt-2">
        {{ $songs->links() }}
    </div>
    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            @forelse ($songs as $song)

            
                <x-chord.chord-card :author="$song->author->name" name="{{$song->name}}" image="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}" type="{{ $type }}" id="{{ $song->id }}"/>
               
            @empty

                <div>
                    No hay canciones subidas
                </div>
            @endforelse
        </div>


    </div>

    <x-modal state="{{ $deleteModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Eliminar Acorde</h3>

        </x-slot>
        <x-slot name="content">
            <h4>Estás seguro de que quieres eliminar estos acordes?</h4>
        </x-slot>

        <x-slot name="footer">

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button wire:click="delete()" class="btn btn-primary">Aceptar</button>
            </div>

        </x-slot>
    </x-modal>
    {{-- <div class="m-auto mt-5">
        {{ $songs->links() }}
    </div> --}}
</div>
