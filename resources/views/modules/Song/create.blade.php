@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/winbox.min.css') }}">
    <!-- Themes -->
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">

    <script src="{{ asset('templates/draggable/js/winbox.min.js') }}"></script>
    <style>
        #structure {
            max-height: 700px;
            overflow-y: scroll;
            line-height: 2;
        }
    </style>


    <x-app.page-header text="Crea una nueva canción" />

    <h3 class="text-start ms-5 pb-3 fs-xl-1 fs-md-4 fs-4 fs-sm-4">
        Establece todo lo necesario
    </h3>

    <div class="container-fluid">


        <div class="row d-flex m-xl-0 m-md-5 m-5 justify-content-center">
            <div class="border-left-xl-primary col-xl-4 col-md-10 d-flex flex-column justify-content-center">
                <form action="{{ route('canciones.store') }}" id="songform">
                    @csrf
                    @method('post')
                    <x-forms.input type="text" class="d-none" name="structure" id="valueofstructure" />

                    <x-containers.flexcolcenter gap="3">
                        <x-forms.label text="Estructura" />
                        <div class="d-flex flex-column gap-3 align-items-center">
                            <div class="d-flex justify-content-center gap-3">
                                <x-forms.button text="Limpiar" color="danger" id="clear" />
                                <x-forms.button text="Duplicar" color="success" id="clone" />

                            </div>

                            <x-forms.area id="area" type="song" />

                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <x-forms.input placeholder="Repeticiones" type="number" id="repetitions" />
                                <x-forms.button text="Intro +" id="intro" />
                                <x-forms.button text="Estrofa +" id="estro" />
                                <x-forms.button text="PreCoro +" id="precor" />
                                <x-forms.button text="Coro +" id="coro" />
                                <x-forms.button text="Puente +" id="puente" />
                                <x-forms.button text="Outro +" id="outro" />

                            </div>


                            <x-containers.flexcolcenter gap="1">
                                <x-forms.label text="Nombre" />
                                <x-forms.input placeholder="Ej: Dios Está Aquí" name="name" />
                            </x-containers.flexcolcenter>


                            <x-containers.flexcolcenter gap="1">
                                <x-forms.label text="Intérpretes originales" />
                                <x-forms.input placeholder="Ej: Jesús adrian Romero" name="author" />
                            </x-containers.flexcolcenter>


                            <x-containers.flexcolcenter gap="1">
                                <x-forms.label text="Género" />
                                <x-forms.select name="genre">
                                    @foreach ($genre as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </x-forms.select>

                            </x-containers.flexcolcenter>


                        </div>

                        <x-containers.flexcolcenter gap="1">
                            <x-forms.label text="Imagen de Referencia" />
                            @livewire('form.image-form')
                        </x-containers.flexcolcenter>

                        <x-containers.flexcolcenter gap="1">
                            <x-forms.label text="Audio de referencia" />
                            @livewire('form.audio-form')
                        </x-containers.flexcolcenter>

                        <x-containers.flexcolcenter gap="1">
                            <x-forms.label text="Palabras Clave" />
                            <x-forms.input name="keywords" type="text" />
                        </x-containers.flexcolcenter>


                        <x-containers.flexcolcenter gap="1">
                            <x-forms.label text="Habilitar Colaboraciones" />
                            <x-forms.input name="collab" type="checkbox" checkbox="true" value="1" />


                        </x-containers.flexcolcenter>


                        <div>
                            <x-forms.button submit="yes" text="Subir Canción" submit id="sub" />
                        </div>

                        <div>
                            
                        </div>

                    </x-containers.flexcolcenter>
            </div>
            <div class="col-xl-6 col-md-10 fw-bold d-flex justify-content-center mt-md-5 mt-5 mt-xl-3">
                <div class="">
                    <h6 class="fw-bold text-center">Vista Previa</h6>
                    <div id="structure" class="m-3 text-center songletterbox">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div
        class=" container-fluid justify-content-xl-around justify-content-md-center d-flex flex-md-column flex-sm-column flex-column flex-xl-row">

    </div>



    </form>

    <input class="d-none" id="allSongsJSON" value="{{ $songs }}" />



    <x-song.song-searcher :songs="$songs" />

    <script src="{{ asset('js/Song/SongSearcher.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="{{ asset('js/Song/SongPrev.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongCreate.js') }}"></script>
@endsection
