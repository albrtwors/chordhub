@extends('layouts.app')
@section('content')
    @vite('resources/react/pdf/entrylogs.jsx')
    <x-app.page-header text="Configuración"/>

    @livewire('config.menu')
    

    <script type="module" src="{{ asset('js/Admin/Alerts.js') }}"></script>
    
@endsection