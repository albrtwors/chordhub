@extends('layouts.app')

@section('content')
    <h1 class="ms-5 fw-bold ">
        {{ Auth::user()->name }}
    </h1>

    @livewire('app.user-profile')

    <script type="module" src="{{ asset('js/App/ChangePfp.js') }}"></script>
@endsection
