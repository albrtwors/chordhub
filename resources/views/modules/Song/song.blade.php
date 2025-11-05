@extends('layouts.app')
@section('content')


    <x-react.vite-refresh path="resources/react/comments/app.jsx" />
  
    
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/winbox.min.css') }}">
    <!-- Themes -->
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/draggable/css/themes/white.min.css') }}">

    <script src="{{ asset('templates/draggable/js/winbox.min.js') }}"></script>
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }
    </style>
    <x-forms.input type="text" class="d-none" id="songjson" value="{{ $songs->structure }}" />



    <div class="row">
        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">


                <x-app.page-header text="{{ $songs->name }}" />

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
        <x-app.link route="{{ route('chord.versions', $songs->id) }}">
            <x-forms.button color="primary" text="Acordes" />
        </x-app.link>
        @can('songs.edit')
            @if ($songs->collab || $songs->user_id == Auth::id())
                <x-app.link route="{{ route('canciones.edit', $songs->id) }}">
                    <x-forms.button color="success" text="Modificar" />
                </x-app.link>
            @endif
        @endcan

        <x-forms.button color="primary" id="export" text="Exportar" />

        @can('songs.destroy')
            @if ($songs->collab || $songs->user_id == Auth::id())
                <form id="delform" action="{{ route('canciones.destroy', $songs->id) }}">
                    @csrf
                    @method('DELETE')
                    <x-forms.button  data-id="{{ $songs->id }}" submit text="Eliminar" color="danger" />


                </form>
            @endif
        @endcan
    </div>



    <div class="m-auto">
        <div class="p-5">
            <div class="text-start structure" id="structure">

            </div>
        </div>

    </div>


    <div class="ms-5 d-flex flex-column align-items-Start gap-3 mt-5">
        <h3 class="fw-bold">
            Tonalidades


            @foreach ($songs->tonalities as $ton)
                @php
                    $userId = $ton->pivot->user_id;
                    $user = \App\Models\User::find($userId);
                @endphp
                <h4><b>{{ $ton->name }}</b>: {{ $user->name }}</h4>
            @endforeach

            <form class="d-flex flex-column gap-3"method="POST" action="{{ route('tonality.store') }}">
                @method('POST')
                @csrf
                <x-forms.input class="d-none" name="song_id" value="{{ $songs->id }}" />

                <div class="col-2">
                    <x-forms.select name="tonality">
                        @foreach ($tonalities as $ton)
                            <option value="{{ $ton->id }}">{{ $ton->name }}</option>
                        @endforeach
                    </x-forms.select>

                </div>
                <div class="col-2">
                    <x-forms.button color="primary" text="Subir Tonalidad" submit />

                </div>

            </form>

    </div>

    
    <x-comments.comment-meta id="{{ $songs->id }}" type="song" />
    <div id="comment-widget"></div>
    <div id="songplayer-widget"></div>

    {{-- <div class="m-5 p-5 border">
        <h3 class="fw-bold mb-5">Comentarios</h3>
        @livewire('appcomments.comments', ['postId' => $songs->id, 'type' => 'App\Models\Song', 'route' => route('comments.create'), 'hasResponses' => false])
        @livewire('appcomments.form', ['parentId' => null, 'postId' => $songs->id, 'type' => 'App\Models\Song', 'route' => route('comments.create')])
    </div> --}}


    {{-- <div class="m-5 p-5 border">
        <h3 class="fw-bold mb-5">Comentarios</h3>
        <x-comments.comments route="{{ route('comments.store') }}" postype="App\Models\Song" :postid="$songs->id"
            :list="$comments" />

        <x-comments.form :parentid="null" postype="App\Models\Song" :postid="$songs->id"
            route="{{ route('comments.store') }}" />

    </div> --}}

    <div class="d-none" id="editMenu"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>




    <script src="{{ asset('js/PDF/PDF.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongView.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script>
@endsection
