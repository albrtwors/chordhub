@extends('layouts.app')

@section('content')
    <h1 class="ms-5 fw-bold ">
        {{Auth::user()->name}}
    </h1>


    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-md-10">
                <div class="d-flex justify-content-center">
                    <img class="pfp my-3"
                        src='{{Auth::user()->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'}}'
                        width="200px" height="200px" alt="">
                </div>

                <div class="d-flex justify-content-start">
                    <form id="pfp" action="{{route("app_change_pfp")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label class="form-label" for="customFile">Sube tu Foto de perfil</label>
                        <input type="file" class="form-control" name="pfp" id="customFile" />
                        <div class="d-flex justify-content-start">
                            <input type="submit" class="my-3 btn btn-primary" value="Subir Foto de Perfil">

                        </div>
                        

                    </form>

                </div>

                <div class="d-flex row justify-content-start">
                    <h5 class="text-start">Cambiar Nombre de Usuario</h5>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">
                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>

                <div class="d-flex row justify-content-start">

                    <h5 class="text-start">Cambiar Contraseña</h5>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <h6 class="text-start">Repite la Contraseña</h6>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>

       



        </div>
        <div class="col-xl-6 col-md-10 ">
            <h3 class="text-center">Datos del Usuario</h3>
    
        </div>
    </div>
    <script type="module" src="{{asset("js/App/ChangePfp.js")}}"></script>
    @endsection