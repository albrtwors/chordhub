@extends('layouts.app')

@section('content')
    <x-app.page-header text="Modifica {{ $list->name }}" />
    <h3 class="ms-5 pb-3">
        Añade las canciones que necesites
    </h3>

    <div class="container-fluid">


        <div class="row d-flex justify-content-center">

            <div class="col-xl-4 gap-3 d-flex flex-column col-md-12 col-12 ms-5">

                <h6 class="mt-3 fw-bold">Tus Canciones</h6>
                <div class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">



                    <li class="list-group-item d-none" id="liTemplate">

                        <div class="d-flex">
                            Tu fidelidad es grande
                        </div>

                        <div class="d-flex justify-content-end">
                            <button id="deleteButton" onclick="" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </li>
                    @forelse($list_songs as $son)
                        <li class="list-group-item " id="liTemplate">

                            <div class="d-flex">

                                {{ $son->name }}
                            </div>
                            <div class="d-flex justify-content-end">
                                <button data-id="{{ $son->id }}" id="deleteButton"
                                    onclick="ListInstance.deleteSong(this)" class="btn btn-danger songbut">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                            <i class="fas fa-bars"></i>
                        </li>
                    @empty
                    @endforelse

                </div>


                <form id="fileform" class="d-flex flex-column align-items-start gap-3"
                    action="{{ route('cancioneros.update', $list->id) }}">



                    <div class="d-flex flex-column w-75">
                        <x-forms.label text="Nombre del Cancionero" />
                        <x-forms.input name="list_name" id="list_name" value="{{ $list->name }}"
                            placeholder="Ej: Servicio para Jóvenes" />

                    </div>


                    <div class="d-flex flex-column align-items-start w-75">
                        <x-forms.label text="Participación Colaborativa" />
                        <input {{ $list->collab ? 'checked' : '' }} type="checkbox" name="collab" id=""
                            value="1">

                    </div>


                    @csrf
                    @method('PUT')
                    <input id="songs" name="songs" type="text" class="d-none">

                    <button class="btn btn-primary mt-3" id="submit" value="Subir cancionero">Subir
                        Cancionero</button>
                </form>
            </div>

            @livewire('file.file-songs', ['songs' => $songs])
            {{-- <div class="col-xl-6">
                <div class="d-flex justify-content-center mb-2">
                    <div class="col-6">
                        <input type="text" class="shadow-sm form-control bg-light border-0 small" name="songname"
                            id="song_search" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                    </div>



                </div>


                <ul class="list-group" id="songsToAdd">
                    @foreach ($songs as $song)
                        <li id="song_template" value="{{ $song->name }}" data-id="{{ $song->id }}"
                            class="list-group-item d-flex">{{ $song->name }}<button
                                onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'), true)"
                                class="ms-auto btn btn-success"> + </button></li>
                    @endforeach
                </ul>
            </div> --}}



        </div>

    </div>

    <div class="mt-3 ms-5 my-3">



    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="{{ asset('js/List/SongListModify.js') }}"></script>
    <script type="module" src="{{ asset('js/Search/SearchListSongs.js') }}"></script>
@endsection
