@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Eliminar Acordes</h1>
    <h3 class="ms-5">Elige la canción a eliminar</h3>

    @livewire('chord.chords', ['type' => 'delete'])

    <script type="module" src="{{ asset('js/Search/SearchSong.js') }}"></script>
@endsection
