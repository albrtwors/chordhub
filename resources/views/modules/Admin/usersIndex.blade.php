@extends('layouts.app')

@section('content')
    <style>
        @media(max-width:700px) {
            .usersTable {
                font-size: 0.65em;

            }


        }
    </style>
    <h1 class="ms-5 fw-bold">Control de usuarios</h1>

    @livewire('admin.own-modal')

    <livewire:admin.users-table />


    {{-- <table class="m-xl-5 m-md-1 m-1 m-sm-1 usersTable text-center">
        <thead>
            <tr>
                <th class="bg-primary text-white" scope="col ">Id</th>
                <th class="bg-primary text-white" scope="col ">Nombre</th>
                <th class="bg-primary text-white" scope="col ">Correo</th>
                <th class="bg-primary text-white" scope="col ">Estado</th>

                <th class="bg-primary text-white" scope="col ">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>
                        @if (isset($user->image->url))
                            <img width="20px" class="rounded-circle" height="20px" src="{{ $user->image->url }}"
                                class="mx-1"></img>
                        @endif
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->active }}</td>

                    <td class="d-flex justify-content-center gap-2">
                        <a class="text-decoration-none" href="{{ route('admin.users.edit', $user->id) }}">
                            <button data-id='{{ $user->id }}' data-toggle="modal" data-target="#exampleModalCenter"
                                class="btn fs-50 btn-primary cargar-info">
                                Añadir Roles
                            </button>
                        </a>
                        <form id="usersDeleteForm" action={{ route('admin.users.destroy', $user->id) }} class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn fs-50 btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table> --}}

    <script type="module" src="{{ asset('js/Admin/Alerts.js') }}"></script>
@endsection
