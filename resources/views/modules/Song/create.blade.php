@extends("layouts.app")
@section('content')


<style>
    #structure {

        line-height: 2;
    }
</style>

<h1 class="text-start sidebar-brand-text ms-5 py-3">
    Crea una nueva canción
</h1>
<h3 class="text-start ms-5 pb-3">
    Establece todo lo necesario
</h3>

<div class="row d-flex justify-content-center">
    <div class="border-left-primary col-xl-4 col-md-10 d-flex justify-content-center">
        <form action="{{route("song_create_validate")}}" id="songform">
            @csrf
            @method('post')
            <input type="text" class="d-none" name="song_structure" id="valueofstructure">
            <div class="mx">
                <h5 class="mt-3">Letra</h5>
                <div class="mt-3">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-danger my-3 me-3" id="clear">Limpiar</button>
                        <button type="button" class="btn btn-success my-3" id="clone">Duplicar</button>
                    </div>
                
                    <div data-mdb-input-init class="form-outline">
                        <textarea spellcheck="false" class="form-control   bg-light small"
                            id="area" rows="10">
Estrofa

Precoro

Coro

Puente


                </textarea>

                    </div>

                    <div class="mt-3 ">
                        <button type="button" title="añade un coro" id="intro" class="btn btn-primary me-3 mt-2">Intro+</button>
                        <button type="button" title="añade un coro" id="estro" class="btn btn-primary me-3 mt-2">Estrofa+</button>
                        <button type="button" title="añade un coro" id="precor" class="btn btn-primary me-3 mt-2">PreCoro+</button>
                        <button type="button" title="añade un verso" id="coro" class=" me-3 btn btn-primary mt-2">Coro +</button>
                        <button type="button" id="puente" title="puente" class="btn btn-primary me-3 mt-2">Puente +</button>
                    </div>
                    <h6 class="mt-3">Nombre de la canción</h6>

                    <div class="input-group mt-3">
                        <input type="text" class="form-control bg-light small" name="song_name"
                            placeholder="ej: Tú fidelidad es grande" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>

                    <h6 class="mt-3">Intérpretes originales</h6>
                    <div class="mt-3">
                        <div class="input-group mt-3">
                            <input type="text" name="song_author" class="form-control bg-light small"
                                placeholder="ej: Hillsong" aria-label="Search" aria-describedby="basic-addon2">

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

                    <h6 class="mt-3">Género</h6>
                    <div class="mt-3">
                        <select name="song_genre" class="songinput form-control bg-light small">
                            <option value="Adoración">Adoración</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Bossa Nova">Bossa nova</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Salsa">Salsa</option>
                            <option value="Worship">Worship</option>
                            <option value="Merengue">Merengue</option>
                        </select>
                    </div>

                    <textarea name="" spellcheck="false" class="d-none songstructure songtextarea  bg-light small"
                        id="area2">
                    <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-12">
                        <div class="est text-center">
                            <h3 class="text-center">Estrofa</h3>
                            <p class="m-5"></p>
                        </div>
                        <div class="pre text-center">
                            <h3 class="text-center"></h3>
                            <p class="m-5"></p>
                        </div>
                        <div class="chorus text-center">
                            <h3 class="text-center">Coro</h3>
                            <p class="m-5"></p>
                        </div>
                        <div class="inter text-center">
                            <h3 class="text-center">Interludio</h3>
                            <p class="m-5"></p>
                        </div>
                    </div>
                </div>

                </textarea>
                </div>

                <h6 class="mt-3">Palabras clave</h6>
                <div class="mt-3">
                    <input class="songinput" type="text" name="song_keywords" id="">
                </div>

                <div class="mt-3">
                    <label for="collab">Participación Colaborativa</label>
                    <input type="checkbox" name="song_collab" id="">
                </div>

            </div>
    </div>
    <div class="col-xl-6 col-md-10 d-flex justify-content-center">
        <div class="">
            <h5 class="text-center">Previsualización</h5>
            <div id="structure" class="m-3 text-center songletterbox">

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
        <input class="btn btn-primary" id="sub" type="submit" value="Subir canción">

    </div>

</div>
</form>

<script type="module" src="{{asset("js/Song/SongPrev.js")}}"></script>
<script type="module" src="{{asset("js/Song/SongCreate.js")}}"></script>

@endsection