@extends('layouts.app')
@section('content')
@vite('resources/react/pdf/entrylogs.jsx')
<x-app.page-header text="Logs"/>
@livewire('admin.logs-table')

@endsection