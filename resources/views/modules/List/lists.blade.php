@extends('layouts.app')

@section('content')
    <h1 class="fw-bold ms-5 py-3">
        Cancioneros
    </h1>
    <h3 class="ms-5 pb-3">
        Aquí encontrarás todos los cancioneros disponibles
    </h3>

    @livewire('File.files', ['type' => 'show'])







    <script type="module" src="{{ asset('js/Search/SearchList.js') }}"></script>
@endsection
