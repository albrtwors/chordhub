@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">
        Eliminar Acordes
    </h1>
    @livewire('chord.chords', ['type' => 'delete'])
@endsection
