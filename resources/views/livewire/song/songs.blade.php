<div>

    
        
        <div style="overflow-x:scroll" class="d-flex gap-3 mx-5">
            @if ($type == 'show')
            <div class="d-flex flex-column gap-2">
                <label  class="fw-bold" for="">Permisos </label>
                <select wire:model.live="ownSongs" class="form-control">
                    <option value="{{ false }}">Canciones de todos</option>
                    <option value="{{ true }}">Solo canciones Propias</option>
                </select>
            </div>
            @elseif($type == 'edit')
            <div class="d-flex flex-column gap-2">
                <label  class="fw-bold" for="">Permisos</label>
                <select wire:model.live="collabSongs" class="form-control">
                    <option value="{{ false }}">Canciones Propias</option>
                    <option value="{{ true }}">Canciones Colaborativas</option>
                </select>
            </div>
            @endif
            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Paginación </label>    
            <select wire:model.live="quantity" class="form-control">
                
                <option value="12">12</option>
                <option value="36">36</option>
                <option value="54">54</option>
            </select>
            </div>

            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Nombre</label>
            <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">
            </div>
            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Géneros </label>
            <select wire:model.live="genreId" placeholder="Género" class="form-control">
        
                <option value="{{ null }}">Todos</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
            </div>


        </div>



    
    <div class="d-flex justify-content-center mt-3">
        {{ $songs->links() }}
    </div>


    <div class="ms-5 me-3 row justify-content-center">
        
        <div id="song_row" class="row">
            @forelse ($songs as $song)
              <x-song.song-card id="{{ $song->id }}" type="{{ $type }}" image="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}" name="{{ $song->name }}" author="{{ $song->author->name }}"/>

            @empty

                <div>
                    No hay canciones subidas
                </div>
            @endforelse
        </div>


    </div>


    <x-modal state="{{ $open }}">
        <x-slot name="head">
            <h3 class="fw-bold">
                Eliminar Canción
            </h3>
        </x-slot>
        <x-slot name="content">
            <h3 class="fw-bold">Estás seguro de que quieres eliminar {{ $selectedSong->name }}</h3>
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('open', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="delete()" class="btn btn-danger">Eliminar</button>
            </div>
        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-modal>

    <script type="module" src="{{ asset('js\Admin\Alerts.js') }}"></script>
</div>
