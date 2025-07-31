@extends("layouts.app")
@section('content')

<h1 class="text-start sidebar-brand-text ms-5 py-3 ">
    Modificar Canción
</h1>
<h3 class="text-start ms-5 pb-3 fs-xl-3  fs-md-4 fs-4 fs-sm-4">
    Busca la canción subida por ti, o de participación colaborativa que deseas modificar
</h3>
<!-- Topbar Search -->

    <div class="d-flex justify-content-center container ">

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

            <div class="ms-5">
                <button class="btn btn-primary active">Todos</button>
                <button class="btn mx-3 btn-primary">Pop</button>
                <button class="btn btn-primary">Rock</button>
                <button class="btn mx-3 btn-primary">Balada</button>
                <button class="btn btn-primary">Bossa Nova</button>
            </div>
        



    </div>

<div class="ms-5 row justify-content-center">

<div class="row">



@forelse ($songs as $song)
                
                <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                <div class="d-flex">
                    <div>
                        <img width="100px" height="100px" src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                    
                    </div>
                    <div class="ms-3">
                        <h4>{{$song->name}}</h4>
                        <p>{{$song->author}}</p>
                        <a href="{{route("song_mod", $song->id)}}"><button class="btn btn-success">Modificar</button></a>
                    </div>
                </div>
                </div>
    
@empty

<div>
    no hay mas canciones
</div>
@endforelse
</div>
   

@endsection