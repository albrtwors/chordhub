<div class="col-xl-6 d-flex flex-column gap-3">
    <div class="d-flex flex-column gap-3 align-items-center justify-content-center ">
        <div>
            <input wire:model.live.debounce.250ms="name" type="text"
                class="shadow-sm form-control bg-light border-0 small" name="songname" id="song_search"
                placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
        </div>

        <div class="d-flex gap-3">

            <select wire:model.live="quantity" class="form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>


            <select wire:model.live="genre" class="form-control">
                <option value="{{ null }}">Todos</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <div style="transition-duration:300ms" class="d-flex transition">
            {{ $songs->count() > 0 ? $songs->links(data: ['scrollTo' => false]) : '' }}
        </div>


    </div>
    <ul class="list-group" id="songsToAdd">
        @forelse ($songs as $song)
            <li id="song_template" value="{{ $song->name }}" data-id="{{ $song->id }}"
                class="list-group-item d-flex">{{ $song->name }}<button
                    onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))"
                    class="ms-auto btn btn-success"> + </button></li>
        @empty
            <div class="m-5">
                No se encontraron canciones
            </div>
        @endforelse
    </ul>
</div>
