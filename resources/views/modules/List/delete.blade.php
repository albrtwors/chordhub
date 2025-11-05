@extends('layouts.app')

@section('content')
    <x-app.page-header text="Eliminar Cancionero" />
    <h3 class="ms-5 pb-3">
        Elimina tus cancioneros
    </h3>

    @livewire('file.files', ['type' => 'destroy'])
@endsection
