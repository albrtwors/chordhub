@extends('layouts.app')

@section('content')
    <x-app.page-header text="Cancioneros" />
    <h3 class="ms-5 pb-3">
        Aquí encontrarás todos los cancioneros disponibles
    </h3>

    @livewire('File.files', ['type' => 'show'])







    <script type="module" src="{{ asset('js/Search/SearchList.js') }}"></script>
@endsection
