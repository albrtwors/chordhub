@extends('layouts.app')

@section('content')
    <x-app.page-header text="Borrar canción" />
    <h3 class="text-start ms-5 pb-3  ">
        Elimina tus canciones
    </h3>


    @livewire('song.songs', ['type' => 'destroy'])








    {{-- <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script>
    <script type="module" src="{{ asset('js/Search/SearchSongDelete.js') }}"></script> --}}
@endsection
