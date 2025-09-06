@extends('layouts.app')

@section('content')
    {{-- <style>
    #structure{
        
        line-height: 2;

    }

</style>



<div class="d-flex ms-5 my-3 gap-2">
    <a href="{{route('song_modify')}}"><button class="mt-1 btn btn-primary"><i class="fas fa-arrow-left"></i></button></a>
    <h1 class="">{{$song->name}}</h1>

    
</div>


<form action="{{route("song_modify_validate")}}" id="modify">
    @method("POST")
    @csrf
    <input type="hidden" id="output_value" name="output_value">
    <input type="hidden" value="{{$song->id}}" name="id">

    <div class="d-flex justify-content-center my-4">
        <button type="button" class="mt-1 btn btn-danger me-2">Deshacer Cambios <i class="fas"></i>
            <button type="submit" class="mt-1 btn btn-success">Guardar Cambios <i class="fas"></i>
    </div>
</form>



<div contenteditable="true" spellcheck="false" class="m-auto text-center structure" id="structure">
    {!! $song->structure !!}
</div> --}}




    <style>
        #structure {

            line-height: 2;
        }
    </style>

    <h1 class="text-start fw-bold sidebar-brand-text ms-5 py-3">
        Modifica tu canción
    </h1>
    <h3 class="text-start ms-5 pb-3 fs-xl-1 fs-md-4 fs-4 fs-sm-4">
        Haz los cambios necesarios
    </h3>

    <div class="container-fluid">


        <div class="row d-flex m-xl-0 m-md-5 m-5 justify-content-center">
            <div class="border-left-xl-primary col-xl-4 col-md-10 d-flex justify-content-center">
                <form action="{{ route('canciones.update', $song->id) }}" id="modifyform">
                    @csrf

                    @method('PATCH')
                    <input type="text" class="d-none" name="structure" id="valueofstructure">
                    <div class="mx">
                        <h5 class="mt-3 text-center">Letra</h5>
                        <div class="mt-3">
                            <input type="text" value="{{ $song->structure }}" id="songjson" class="d-none">
                            <input type="text" class="d-none" name="song_id" value="{{ $song->id }}">
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-danger my-3 me-3" id="clear">Limpiar</button>
                                <button type="button" class="btn btn-success my-3" id="clone">Duplicar</button>
                            </div>

                            <div data-mdb-input-init class="form-outline">
                                <textarea spellcheck="false" class="form-control   bg-light small" id="area" rows="10">
Estrofa

Precoro

Coro

Puente
</textarea>

                            </div>

                            <div class="mt-3 ">
                                <button type="button" title="añade un coro" id="intro"
                                    class="btn btn-primary me-3 mt-2">Intro+</button>
                                <button type="button" title="añade un coro" id="estro"
                                    class="btn btn-primary me-3 mt-2">Estrofa+</button>
                                <button type="button" title="añade un coro" id="precor"
                                    class="btn btn-primary me-3 mt-2">PreCoro+</button>
                                <button type="button" title="añade un verso" id="coro"
                                    class=" me-3 btn btn-primary mt-2">Coro +</button>
                                <button type="button" id="puente" title="puente"
                                    class="btn btn-primary me-3 mt-2">Puente +</button>
                            </div>
                            <h6 class="mt-3 text-center">Nombre de la canción</h6>

                            <div class="input-group mt-3">
                                <input type="text" value="{{ $song->name }}" class="form-control bg-light small"
                                    name="name" placeholder="ej: Tú fidelidad es grande" aria-label="Search"
                                    aria-describedby="basic-addon2">

                            </div>

                            <h6 class="mt-3 text-center">Intérpretes originales</h6>
                            <div class="mt-3">
                                <div class="input-group mt-3">
                                    <input type="text" value="{{ $song->author->name }}" name="author"
                                        class="form-control bg-light small" placeholder="ej: Hillsong" aria-label="Search"
                                        aria-describedby="basic-addon2">

                                </div>
                            </div>

                            {{-- <h6 class="mt-3">Tonalidad por defecto</h6>
                    <div class="mt-3">
                        <select size="5" name="tone" multiple class="form-control bg-light small d-inline songinput">
                            <option value="C Mayor">C</option>
                            <option value="C Menor">Cm</option>
                            <option value="C# Mayor">C#</option>
                            <option value="C# Menor">C#m</option>
                            <option value="D Mayor">D</option>
                            <option value="D Menor">Dm</option>
                            <option value="D# Mayor">D#</option>
                            <option value="D# Menor">D#m</option>
                            <option value="E Mayor">E</option>
                            <option value="E Menor">Em</option>
                            <option value="F Mayor">F</option>
                            <option value="F Menor">Fm</option>
                            <option value="F# Mayor">F#</option>
                            <option value="F# Menor">F#m</option>
                            <option value="G Mayor">G</option>
                            <option value="G Menor">Gm</option>
                            <option value="G# Mayor">G#</option>
                            <option value="G# Menor">G#m</option>
                            <option value="A Mayor">A</option>
                            <option value="A Menor">Am</option>
                            <option value="A# Mayor">A#</option>
                            <option value="A# Menor">A#m</option>
                            <option value="B Mayor">B</option>
                            <option value="B Menor">Bm</option>
                        </select>

                    </div> --}}

                            <h6 class="mt-3 text-center">Género</h6>
                            <div class="mt-3 d-flex justify-content-center">
                                <select name="genre" class="songinput form-control bg-light small">
                                    @foreach ($genre as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                        </div>

                        <h6 class="mt-3 text-center">Palabras clave</h6>
                        <div class="mt-3 d-flex justify-content-center">
                            <input class="songinput" value="{{ $song->keywords }}" type="text" name="keywords"
                                id="">
                        </div>

                        <div class="mt-3">
                            <label for="collab">Participación Colaborativa</label>
                            <input {{ $song->collab ? 'checked' : '' }} type="checkbox" name="collab" id=""
                                value="1">
                        </div>

                    </div>
            </div>
            <div class="col-xl-6 col-md-10 d-flex justify-content-center mt-md-5 mt-5 mt-xl-3">
                <div class="">
                    <h5 class="text-center">Previsualización</h5>
                    <div id="structure" class="m-3 text-center songletterbox">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div
        class=" container-fluid justify-content-xl-around justify-content-md-center d-flex flex-md-column flex-sm-column flex-column flex-xl-row">

    </div>

    <div class="container-fluid d-flex justify-content-center my-4">
        <h6 class="text-center col-5">
            La canción únicamente podrá ser modificada o eliminada por ti, a menos de que habilites la participación
            colaborativa
        </h6>
    </div>
    <div class="container-fluid d-flex justify-content-center my-3">
        <div>
            <input class="btn btn-primary" id="sub" type="submit" value="Actualizar">

        </div>

    </div>
    </form>


    <script type="module" src="{{ asset('js/Song/SongPrevModify.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongModify.js') }}"></script>
@endsection
