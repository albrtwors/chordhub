@extends('layouts.app')

@section('content')
    <x-app.page-header text="Canciones" />

    <h3 class="ms-5 pb-3 ">
        Aquí encontrarás todas las canciones disponibles
    </h3>

    @livewire('song.songs', ['type' => 'show'])



    <script type="module" src="{{ asset('js/Search/SearchSong.js') }}"></script>
@endsection
