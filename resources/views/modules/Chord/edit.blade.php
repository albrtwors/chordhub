@extends('layouts.app')

@section('content')
<style>
    #structure{
        
        border-radius: 50px;
        line-height: 2;
        width: 70vw;

    }
  
.chord {
            position    : absolute;
            top         : -20px;
            width       : 0;
            font-style  : italic;
            font-weight : bold;
}

/* Para que las palabras y los acordes se posicionen correctamente */
.span-wrapper {
  position: relative;
  display: inline-block;
  line-height: 1.5em; /* Ajusta la altura de línea si es necesario */
}
</style>







<div class="row">
    <input type="text" id="songjson" value="{{$song->chord->structure ?? $song->structure}}" class="d-none">
    <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
        <div class="d-flex ms-5 my-3 gap-2">
             <a href="{{$lastVisited}}"><button class="mt-1 btn btn-primary"><i
                        class="fas fa-arrow-left"></i></button></a>
            <h1 class="fw-bold" id="elementoReferencia">{{$song->name}}</h1>
        </div>
    </div>
    <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
        <div class="d-flex my-3">
            <h6 class="me-1 mt-2">Subido por: {{$user->name}} </h6> <img class="img-profile rounded-circle" width="32" height="32" src="{{$user->image->url ?? "https://cdn-icons-png.flaticon.com/512/3809/3809073.png"}}"></img>
        </div>
    </div>

</div>

<form id="delform" class="d-flex justify-content-center" action="{{route('acordes.destroy', $song->id)}}">
    <button type="submit" class="btn btn-danger mb-3">
        Eliminar acordes <i class="fas fa-trash"></i>
    </button>
</form>
<h3 class="text-center">Añade los Acordes</h3>
<h6 class="text-center">Haz click en la posición en la que quieras añadir el acorde</h6>
<div class="d-flex justify-content-center">
    <form id="songform" action="{{route('acordes.store')}}">
        @method('POST')
        @csrf
    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
         <input type="text" value="{{$song->id}}" class="d-none" name="song_id" >
         
        <input type="text" class="d-none" name="song_structure" id="valueofstructure">
        

    </div>
    <textarea spellcheck="false" class="form-control bg-light" id="area"  rows="10">
    </textarea>

 </div>

<div class="d-flex justify-content-center mt-4 gap-3">
    <button id="addchord" type="button" class="btn btn-primary">Añadir acorde</button>
    
    
    
    <select id="chords" class="bg-light" placeholder="Selecciona un acorde">
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
    </select> 
</div>


<h2 class="text-center mt-5 ">Previsualización</h2>
<div class="m-auto text-center my-3" id="structure">
 

</div>
<div class="d-flex justify-content-center mt-3">
<input type="submit" class="btn btn-primary" value="Subir acordes">
</div>
    
    </form>

<script type="module" src="{{asset('js/Chord/ChordPreview.js')}}"></script>
<script type="module" src="{{asset('js/Chord/ChordCreate.js')}}"></script>
<script type="module" src="{{asset('js/Chord/ChordDelete.js')}}"></script>

@endsection