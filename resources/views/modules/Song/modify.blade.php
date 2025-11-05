@extends('layouts.app')
@section('content')
    <x-app.page-header text="Modificar canciones" />
    <h3 class="text-start ms-5 pb-3 fs-xl-3  fs-md-4 fs-4 fs-sm-4">
        Modifica tus canciones
    </h3>


    @livewire('song.songs', ['type' => 'edit'])
@endsection
