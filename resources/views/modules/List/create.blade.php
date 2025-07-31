@extends('layouts.app')

@section('content')






<h1 class="ms-5 py-3">
    Crear Cancionero
</h1>
<h3 class="ms-5 pb-3">
    Añade las canciones que necesites
</h3>

<div class="row d-flex justify-content-center">

    <div class="col-xl-4 col-md-12 col-12 ms-5">

        <h6 class="mt-3">Tus Canciones</h6>
        <ul class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">
            <li class="list-group-item" id="liTemplate">
                <div class="d-flex">
                    Tu fidelidad es grande
                </div>
                <div class="d-flex justify-content-end">
                    <button id="deleteButton" onclick="" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </li>

            
        </ul>

        <h6 class="mt-3">Nombre del cancionero</h6>

        <div class="input-group mt-3" >
            <input type="text" class="form-control bg-light small" name="list_name" id="list_name"
                placeholder="ej: Servicio para la familia" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div>
            <button class="btn btn-primary mt-3" id="submit" value="Subir cancionero">Subir Cancionero</button>

        </div>
    </div>

    <div class="col-xl-6">
        <div class="d-flex justify-content-center mb-2">
            <div>
                <label for="">Buscar canción</label>
                <input type="text">
            </div>
        </div>
        <ul class="list-group" id="songsToAdd">
            @foreach($songs as $song)
            <li value="{{$song->name}}" data-id="{{$song->id}}" class="list-group-item d-flex">{{$song->name}}<button onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))" class="ms-auto btn btn-success"> + </button></li>
            @endforeach
        </ul>
    </div>


        

    </div>

<div class="mt-3 ms-5 my-3">


</div>


    
</div>

<script type="module" src="{{asset('js/List/SongListCreate.js')}}"></script>

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