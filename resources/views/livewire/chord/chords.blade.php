<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            @if ($type == 'create')
            @elseif($type == 'edit')
                <select wire:model.live="collabChords" class="form-control">
                    <option value="{{ false }}">Canciones con Acordes Propios</option>
                    <option value="{{ true }}">Canciones con Acordes Colaborativos</option>
                </select>
            @elseif($type == 'delete')
            @else
                <select wire:model.live="ownChords" class="form-control">
                    <option value="{{ false }}">Todas las Canciones con Acordes</option>
                    <option value="{{ true }}">Canciones con acordes propios</option>
                </select>
            @endif

            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">

            <select wire:model.live="genreId" class="w-25 form-control">
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
                @if ($type == 'delete')
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="{{ route('chordsDeleteIndex', $song->id) }}">
                                    <h4>{{ $song->name }}</h4>
                                    <p>{{ $song->author->name }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @elseif($type == 'create')
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="{{ route('chordsCreate', $song->id) }}">
                                    <h4>{{ $song->name }}</h4>
                                    <p>{{ $song->author->name }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @elseif($type == 'edit')
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="{{ route('chordsEditSong', $song->id) }}">
                                    <h4>{{ $song->name }}</h4>
                                    <p>{{ $song->author->name }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @else
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="{{ route('chord.versions', $song->id) }}">
                                    <h4>{{ $song->name }}</h4>
                                    <p>{{ $song->author->name }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @endif
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
