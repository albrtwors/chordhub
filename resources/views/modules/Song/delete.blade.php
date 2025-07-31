@extends('layouts.app')

@section('content')

<h1 class="text-start sidebar-brand-text ms-5 py-3 fs-xl-1 fs-md-4 fs-4 fs-sm-4">
    Borrar canción
</h1>
<h3 class="text-start ms-5 pb-3  ">
    Busca la canción que hayas subido que deseas eliminar
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


<form class="row" id="songdelete" action="/chordhub/canciones/eliminar/">
@csrf
@method("DELETE")
@forelse ($songs as $song)
                
                <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                <div class="d-flex">
                    <div>
                        <img width="100px" height="100px" src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">
                    
                    </div>
                    <div class="ms-3">
                        
                        <h4>{{$song->name}}</h4>
                        <p>{{$song->author}}</p>
                        
                      
                            
                      
                           
                           
                           <button type="button" data-id="{{$song->id}}" onclick="songDelete(this)" class="btn btn-danger">Eliminar</button>
                      
                        
                    </div>
                </div>
                </div>
    
@empty
</form>
<div>
    no hay mas canciones
</div>
@endforelse



    



</div>

<script type="module" src="{{asset("js/Song/SongDelete.js")}}"></script>
@endsection


  