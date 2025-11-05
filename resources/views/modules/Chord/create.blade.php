@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/winbox.min.css') }}">
    <!-- Themes -->
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">

    <script src="{{ asset('templates/draggable/js/winbox.min.js') }}"></script>
    <style>
        #structure {

            line-height: 2;
            width: 70vw;
            max-height: 700px;
            overflow-y: scroll;
        }

        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            font-style: italic;
            font-weight: bold;
        }

        .chord.chord-small {
            font-size: 0.7em;
            letter-spacing: 0.05px;
        }

        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;

        }
    </style>

    <span id="clickHint" class="d-none"
        style="padding:2; z-index:30; width:20px; height:20px; background:rgba(0, 115, 255, 0.421); border-radius:100%"></span>

    <div class="row">
        <x-forms.input value="{{ $song->structure }}" id="songjson" class="d-none" />

        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">
                <x-app.page-header text="{{ $song->name }}" />

            </div>


        </div>

    </div>



    <div class="row m-5">
        <div class="col-xl-6 d-flex flex-column align-items-center">


            <x-forms.label text="Añade los acordes" />
            <p class="text-center">Haz click en la posición en la que quieras añadir el acorde</p>
            <div class="d-flex justify-content-center">
                <form id="songform" action="{{ route('acordes.store') }}">
                    @method('POST')
                    @csrf
                    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
                        <x-forms.input class="d-none" name="song_id" value="{{ $song->id }}" />
                        <x-forms.input class="d-none" name="song_structure" id="valueofstructure" />



                    </div>
                    <x-forms.area id="area" type="chord" />


            </div>


            <div class="d-flex justify-content-center mt-4 gap-3">
                <x-forms.button id="addchord" text="Añadir" />


                <x-forms.select id="chords">
                    <option value="">Selecciona un acorde</option>
                    <!-- Acordes mayores -->
                    <option value="[C]">C</option>
                    <option value="[C#]">C#</option>
                    <option value="[D]">D</option>
                    <option value="[D#]">D#</option>
                    <option value="[E]">E</option>
                    <option value="[F]">F</option>
                    <option value="[F#]">F#</option>
                    <option value="[G]">G</option>
                    <option value="[G#]">G#</option>
                    <option value="[A]">A</option>
                    <option value="[A#]">A#</option>
                    <option value="[B]">B</option>

                    <!-- Acordes menores -->
                    <option value="[Cm]">Cm</option>
                    <option value="[C#m]">C#m</option>
                    <option value="[Dm]">Dm</option>
                    <option value="[D#m]">D#m</option>
                    <option value="[Em]">Em</option>
                    <option value="[Fm]">Fm</option>
                    <option value="[F#m]">F#m</option>
                    <option value="[Gm]">Gm</option>
                    <option value="[G#m]">G#m</option>
                    <option value="[Am]">Am</option>
                    <option value="[A#m]">A#m</option>
                    <option value="[Bm]">Bm</option>
                </x-forms.select>





            </div>

            <div class="d-flex gap-3 mt-4 justify-content-center align-items-center flex-column">


                <div class="d-flex flex-column align-items-center ">
                    <x-forms.label text="Nombre" />
                    <x-forms.input name="name" />

                </div>

                <div class="d-flex flex-column align-items-center ">
                    <x-forms.label text="Participación Colaborativa" />
                    <x-forms.input checkbox type="checkbox" value="1" name="collab" />

                </div>

            </div>


            <div class="d-flex justify-content-center my-3">
                <x-forms.button type="submit" submit text="Subir" />

            </div>

            </form>
        </div>
        <div class="col-xl-6">
            <h5 class="text-center  fw-bold">Previsualización</h5>
            <div class="" id="structure">


            </div>
        </div>

    </div>

    <div id="editMenu" class="d-none"></div>

    <div id="chordEditArea"class="m-3 d-flex gap-2">
        <textarea spellcheck="false" name="" id="chordArea" cols="30" rows="10" class="form-control"></textarea>
        <div class="d-flex flex-column gap-2 justify-content-center">

            <label class="text-center fw-bold">
                Añade múltiples acordes
            </label>
            <div class="d-flex gap-2 justify-content-center">
                <div>
                    <button class="btn btn-primary" id="multipleSelButton">Activar</button>
                </div>
                <div>
                    <button class="btn btn-success" id="addMultiple">Añadir</button>
                </div>

            </div>
            <div class="">

                <x-forms.select id="chordSelectEditArea">
                    <option value="">Selecciona un acorde</option>
                    <!-- Acordes mayores -->
                    <option value="[C]">C</option>
                    <option value="[C#]">C#</option>
                    <option value="[D]">D</option>
                    <option value="[D#]">D#</option>
                    <option value="[E]">E</option>
                    <option value="[F]">F</option>
                    <option value="[F#]">F#</option>
                    <option value="[G]">G</option>
                    <option value="[G#]">G#</option>
                    <option value="[A]">A</option>
                    <option value="[A#]">A#</option>
                    <option value="[B]">B</option>

                    <!-- Acordes menores -->
                    <option value="[Cm]">Cm</option>
                    <option value="[C#m]">C#m</option>
                    <option value="[Dm]">Dm</option>
                    <option value="[D#m]">D#m</option>
                    <option value="[Em]">Em</option>
                    <option value="[Fm]">Fm</option>
                    <option value="[F#m]">F#m</option>
                    <option value="[Gm]">Gm</option>
                    <option value="[G#m]">G#m</option>
                    <option value="[Am]">Am</option>
                    <option value="[A#m]">A#m</option>
                    <option value="[Bm]">Bm</option>
                </x-forms.select>

            </div>
            <label for="" class="text-center fw-bold d-none">Añadido inteligente</label>
            <label for="" class="text-center d-none">Escribe el acorde, automáticamente se añadirá a
                la lista de
                posiciones</label>
            <div class="d-flex gap-2 align-items-center d-none">
                <input id="intChordInput" type="text" class="form-control"><label id="posChordLabel"
                    for="">Posiciones: </label>
            </div>




        </div>
    </div>
    <script>
        new WinBox(`Editor`, {

            min: true,
            mount: document.getElementById('chordEditArea')

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type="module" src="{{ asset('js/Chord/ChordPreview.js') }}"></script>
    <script type="module" src="{{ asset('js/Chord/ChordCreate.js') }}"></script>
@endsection
