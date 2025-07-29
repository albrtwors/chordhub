@extends('layouts.app')

@section('content')
    <h1 class="ms-5">
        {{session("user_name")}}
    </h1>

    <div class="d-flex justify-content-center">
        <img class="pfp my-3"
            src='{{session("user_pfp") ? session("user_pfp") : 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}'
            width="200px" height="200px" alt="">
    </div>

    <div class="d-flex justify-content-center">
        <form id="pfp" action="{{route("app_change_pfp")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <label class="form-label" for="customFile">Sube tu Foto de perfil</label>
            <input type="file" class="form-control" name="pfp" id="customFile" />
            <input type="submit" class="my-3 btn btn-primary" value="Subir Foto de Perfil">

        </form>

    </div>
    <script type="module" src="{{asset("js/App/ChangePfp.js")}}"></script>
    @endsection