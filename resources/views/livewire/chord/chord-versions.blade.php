<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            @if ($type == 'show')
                <select wire:model.live="ownVersions" class="form-control">
                    <option value="{{ false }}">Canciones de todos</option>
                    <option value="{{ true }}">Solo acordes Propias</option>
                </select>
            @elseif($type == 'edit')
                <select wire:model.live="collabVersions" class="form-control">
                    <option value="{{ false }}">Canciones Propias</option>
                    <option value="{{ true }}">Canciones Colaborativas</option>
                </select>
            @endif

            <select wire:model.live="quantity" class="w-25 form-control">

                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="chordName" placeholder="Busca una Canción" type="text" class="form-control">

           
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $chords->links() }}
    </div>


    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            @forelse ($chords as $song)
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-3">
                    <div class="d-flex p-3 ">


                        <div>
                            <img width="100px" height="100px"
                                src="{{ $song->song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                alt="">

                        </div>
                        <div class="ms-3 d-flex flex-column flex-fill">



                            <h4 class="mt-1">{{ $song->name }}</h4>
                            <p>{{ $song->user->name }}</p>

                            @if ($type == 'edit')
                                <a href="{{ route('acordes.edit', $song->id) }}"><button
                                        class="btn btn-success">Modificar</button></a>
                            @elseif($type == 'show')
                                <a href="{{ route('acordes.show', $song->id) }}"><button
                                        class="btn btn-primary">Ver</button></a>
                            @elseif($type == 'delete')
                                <a><button type="button" wire:click="deleteModal({{ $song->id }})"
                                        data-id="{{ $song->id }}" class="btn btn-danger">Eliminar</button></a>
                            @endif
                        </div>

                    </div>
                </div>

            @empty

                <div>
                    No hay acordes subidas
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
</div>