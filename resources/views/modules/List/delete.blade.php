@extends('layouts.app')

@section('content')
    <h1 class="ms-5 fw-bold py-3">
        Eliminar Cancionero
    </h1>
    <h3 class="ms-5 pb-3">
        Elimina tus cancioneros
    </h3>

    @livewire('file.files', ['type' => 'destroy'])
@endsection
