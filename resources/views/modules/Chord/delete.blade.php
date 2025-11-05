@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Eliminar Acordes</h1>
    <h3 class="ms-5">Elimina los acordes de tus subidas</h3>

    @livewire('chord.chords', ['type' => 'delete'])
@endsection
