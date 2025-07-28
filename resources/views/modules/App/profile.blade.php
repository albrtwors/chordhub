@extends('layouts.app')

@section('content')
    <h1 class="ms-5">
        {{session("user_name")}}
    </h1>

    <div class="d-flex justify-content-center">
        <img class="pfp my-3"
            src="<?php  if(session("user_pfp")){echo session("user_pfp");}else{echo 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png';}?>"
            width="200px" height="200px" alt="">
    </div>

    <div class="d-flex justify-content-center">
        <form id="pfp" action="{{route("app_change_pfp")}}" method="post" enctype="multipart/form-data">
            @csrf

            <label class="form-label" for="customFile">Sube tu Foto de perfil</label>
            <input type="file" class="form-control" name="pfp" id="customFile" />
            <input type="submit" class="my-3 btn btn-primary" value="Subir Foto de Perfil">

        </form>

    </div>
    <script type="module" src="{{asset("js/App/ChangePfp.js")}}"></script>
    @endsection