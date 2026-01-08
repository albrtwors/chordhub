@extends('layouts.app')
@section('content')
    <x-app.page-header text="Gestionar Inventario"/>
    
    @livewire('items.items-table');
    
@endsection
