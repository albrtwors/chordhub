<div>

    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            @if ($type == 'create')
            @elseif($type == 'edit')
                <select wire:model.live="collabVersions" class="form-control">
                    <option value="{{ false }}">Todas las versiones</option>
                    <option value="{{ true }}">Solo versiones colaborativas</option>
                </select>
            @elseif($type == 'delete')
            @else
                <select wire:model.live="ownVersions" class="form-control">
                    <option value="{{ false }}">Todas las Versiones</option>
                    <option value="{{ true }}">Tus Versiones</option>
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

    <div class="d-flex justify-content-center mt-2">
        {{ $chords->links() }}
    </div>
    <div class="row ms-5 me-3 justify-content-center">

        @forelse ($chords as $chord)
            <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                <div class="d-flex">

                    <div>
                        <img width="100px" height="100px"
                            src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                            alt="">

                    </div>
                    <div class="ms-3">
                        @if ($type == 'edit')
                            <a class="link-dark" href="{{ route('acordes.edit', $chord->id) }}">
                                <h4>{{ $chord->name }}</h4>
                                <p>{{ $chord->user->name }}</p>

                            </a>
                        @elseif($type == 'delete')
                            <div>
                                <h4>{{ $chord->name }}</h4>
                                <p>{{ $chord->user->name }}</p>
                                <button wire:click="deleteModal({{ $chord->id }})" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </div>
                        @elseif($type == 'show')
                            <a class="link-dark" href="{{ route('acordes.show', $chord->id) }}">
                                <h4>{{ $chord->name }}</h4>
                                <p>{{ $chord->user->name }}</p>
                            </a>
                        @endif

                    </div>

                </div>
            </div>

        @empty
            <h2 class="m-5">
                No hay ninguna versión disponible
            </h2>
        @endforelse

    </div>


    <x-modal state="{{ $open }}">
        <x-slot name="head">
            <h3 class="fw-bold">
                Eliminar Acordes
            </h3>
        </x-slot>
        <x-slot name="content">
            <h3 class="fw-bold">Estás seguro de que quieres eliminar la version {{ $selectedChord->name }}</h3>
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
