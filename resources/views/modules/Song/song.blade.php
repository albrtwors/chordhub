@extends('layouts.app')
@section('content')
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }
    </style>
    <input type="text" id="songjson" value="{{ $songs->structure }}" class="d-none">
    <input id="username" value="{{ Auth::user()->name }}" type="hidden" name="">

    <input id="id" value="{{ Auth::user()->id }}" type="hidden" name="">
    <input id="img" value="{{ Auth::user()->image->url ?? 'nada' }}" type="hidden" name="">


    <div class="row">
        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">


                <h1 class="fw-bold">{{ $songs->name }}</h1>

            </div>
        </div>

        <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
            <div class="d-flex my-3">
                <h6 class="me-1 mt-2">Subido por: <span class="fw-bold">{{ $user->roles->first()->name }}</span>
                    {{ $user->name }}</h6> <img class="img-profile rounded-circle" width="32" height="32"
                    src="{{ $user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}"></img>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center gap-3 my-3">
        <a class="order-1" href="{{ route('acordes.show', $songs->id) }}"><button class="btn btn-primary">Ver
                acordes</button> </a>
        @can('songs.edit')
            <a class="" href="{{ route('canciones.edit', $songs->id) }}"><button
                    class="btn btn-success">Modificar</button></a>
        @endcan

        <button id="export" class="btn btn-primary">
            Exportar
        </button>
        @can('songs.destroy')
            <form id="delform" action="{{ route('canciones.destroy', $songs->id) }}">
                @csrf
                @method('DELETE')
                <button data-id="{{ $songs->id }}" class="btn btn-danger">Eliminar</button>

            </form>
        @endcan
    </div>

    {{-- <div class="m-3">
        <h3>Tonalidades</h3>
        <h6>Selecciona tu tonalidad</h6>
        <form action="">
            <select name="" id="">
                @foreach ($tonalities as $tonality)
                    <option value="{{ $tonality->name }}">{{ $tonality->name }}</option>
                @endforeach
            </select>
        </form>

        @foreach ($songs->usersTonality as $relation)
            <p>
                <span class="fw-bold">{{ $relation->user->name }}</span> tiene la tonalidad
                {{ $relation->tonality->name }}
            </p>
        @endforeach
    </div> --}}

    <div class="m-auto">
        <div class="text-start structure p-5 " id="structure">

        </div>
    </div>


    <div class="ms-5 d-flex flex-column align-items-center">
        <h3 class="fw-bold">
            Tonalidades


            @foreach ($songs->tonalities as $ton)
                <h4>{{ $ton->name }}</h4>
                @php
                    $userId = $ton->pivot->user_id;
                    $user = \App\Models\User::find($userId);
                @endphp
                <p>Usuario: {{ $user->name }}</p>
            @endforeach

            <form method="POST" action="{{ route('tonality.store') }}">
                @method('POST')
                @csrf
                <input type="hidden" name="song_id" value="{{ $songs->id }}">
                <select name="tonality" class="form-control" id="">
                    @foreach ($tonalities as $ton)
                        <option value="{{ $ton->id }}">{{ $ton->name }}</option>
                    @endforeach

                </select>
                <button class="btn btn-primary">
                    Dale
                </button>
            </form>

    </div>

    <div class="m-5 p-5 border">
        <h3 class="fw-bold mb-5">Comentarios</h3>
        <x-comments.comments route="{{ route('comments.store') }}" postype="App\Models\Song" :postid="$songs->id"
            :list="$comments" />

        <x-comments.form :parentid="null" postype="App\Models\Song" :postid="$songs->id"
            route="{{ route('comments.store') }}" />

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="module" src="{{ asset('js/Comments/CommentHandler.js') }}"></script>
    <script src="{{ asset('js/PDF/PDF.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongView.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script>
@endsection
