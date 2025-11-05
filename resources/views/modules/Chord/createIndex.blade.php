@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Crear Acordes</h1>
    <h3 class="ms-5">Elige la canción a armonizar</h3>

    @livewire('chord.chords', ['type' => 'create'])

    <script type="module" src="{{ asset('js/Search/SearchSong.js') }}"></script>
@endsection
