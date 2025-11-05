@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Versiones de {{ $song->name }}</h1>
    @livewire('chord.chord-versions', ['song' => $song, 'type' => 'show'])
@endsection
