@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Ver Acordes</h1>
    <h3 class="ms-5">Aquí encontrarás todas las colecciones de acordes</h3>

    @livewire('chord.chords', ['type' => 'view'])

    <script type="module" src="{{ asset('js/Search/SearchSong.js') }}"></script>
@endsection
