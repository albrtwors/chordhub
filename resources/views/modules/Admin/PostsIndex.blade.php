@extends('layouts.app')

@section('content')
    <style>
        @media(max-width:700px) {
            .usersTable {
                font-size: 0.65em;

            }


        }
    </style>
    <h1 class="ms-5 fw-bold">Control de Publicaciones</h1>

    @livewire('admin.posts-table')



    <script type="module" src="{{ asset('js/Admin/Alerts.js') }}"></script>
@endsection
