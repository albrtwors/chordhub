@extends('layouts.app')

@section('content')
    <h1 class="text-start sidebar-brand-text ms-5 py-3 fw-bold">
        Borrar canción
    </h1>
    <h3 class="text-start ms-5 pb-3  ">
        Elimina tus canciones
    </h3>


    @livewire('song.songs', ['type' => 'destroy'])








    {{-- <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script>
    <script type="module" src="{{ asset('js/Search/SearchSongDelete.js') }}"></script> --}}
@endsection
