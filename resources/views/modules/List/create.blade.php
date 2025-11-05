@extends('layouts.app')

@section('content')
    <x-app.page-header text="Crear Cancionero" />


    <h3 class="ms-5 pb-3">
        Añade las canciones que necesites
    </h3>

    <div class="container-fluid">


        <div class="row d-flex justify-content-center">


            <div class="col-xl-4 d-flex flex-column gap-3 col-md-12 col-12 ms-5">
                <x-forms.input class="d-none" id="songs"></x-forms.input>
                <x-forms.label text="Tus Canciones"></x-forms.label>
                <li class="list-group-item d-none" draggable="true" id="liTemplate">

                    <div class="d-flex">
                        Tu fidelidad es grande
                    </div>

                    <div class="d-flex justify-content-end">
                        <button id="deleteButton" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </li>
                <div class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">


                </div>





                <div class="d-flex flex-column w-75">
                    <x-forms.label text="Nombre del Cancionero" />
                    <x-forms.input name="list_name" id="list_name" placeholder="Ej: Servicio para Jóvenes" />

                </div>


                <div class="d-flex flex-column align-items-start">
                    <h6 class="fw-bold">Participación colaborativa</h6>
                    <x-forms.input checkbox="{{ true }}" type="checkbox" id="collab" name="collab"
                        value="1" />


                </div>

                <div>
                    <x-forms.button color="primary" id="submit" text="Subir Cancionero" />

                </div>

            </div>

            @livewire('file.file-songs', ['songs' => $songs])
            {{-- <div class="col-xl-6 d-flex flex-column gap-3">
                <div class="d-flex justify-content-center ">
                    <div class="col-6">
                        <input type="text" class="shadow-sm form-control bg-light border-0 small" name="songname"
                            id="song_search" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                    </div>



                </div>
                <ul class="list-group" id="songsToAdd">
                    @foreach ($songs as $song)
                        <li id="song_template" value="{{ $song->name }}" data-id="{{ $song->id }}"
                            class="list-group-item d-flex">{{ $song->name }}<button
                                onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))"
                                class="ms-auto btn btn-success"> + </button></li>
                    @endforeach
                </ul>
            </div> --}}




        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="{{ asset('js/List/SongListCreate.js') }}"></script>
    <script type="module" src="{{ asset('js/Search/SearchListSongs.js') }}"></script>
@endsection




{{-- 
        <div class="d-flex justify-content-end container col-6">

            <div class="ms-5">
                <button class="btn btn-primary active">Todos</button>
                <button class="btn mx-3 btn-primary">Pop</button>
                <button class="btn btn-primary">Rock</button>
                <button class="btn mx-3 btn-primary">Balada</button>
                <button class="btn btn-primary">Bossa Nova</button>
            </div>

            <div class="div">
                <form
                    class="ms-5 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
