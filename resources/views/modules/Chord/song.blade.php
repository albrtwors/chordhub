@extends('layouts.app')
@section('content')
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }


        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            font-style: italic;
            font-weight: bold;
        }


        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;
        }
    </style>



    @if ($song->chord)
        <input type="text" id="songjson" value="{{ $song->chord->structure }}" class="d-none">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
                <div class="d-flex ms-5 my-3 gap-2">
                    <a href="{{ $lastVisited }}"><button class="mt-1 btn btn-primary"><i
                                class="fas fa-arrow-left"></i></button></a>
                    <h1 class="fw-bold">{{ $song->name }}</h1>
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
                <div class="d-flex my-3">
                    <h6 class="me-1 mt-2">Subido por: {{ $song->user->name }} </h6> <img class="img-profile rounded-circle"
                        width="32" height="32"
                        src="{{ $song->user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}"></img>
                </div>

            </div>

            <div class="col-1">
                <button id="export" class="ms-5 btn btn-primary d-inline">
                    Exportar
                </button>
            </div>


        </div>

        <div class="text-start p-5 structure m-auto" id="structure">


        </div>

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-primary" id="chord_up_half">1/2+</button>
            <button class="btn btn-primary" id="chord_down_half">1/2-</button>
        </div>
        <div class="m-5 p-5 border">
            <h3 class="fw-bold mb-5">Comentarios</h3>

            <x-comments.comments route="{{ route('comments.store') }}" postype="App\Models\Chord" :postid="$song->chord->id"
                :list="$comments" />

            <x-comments.form :parentid="null" postype="App\Models\Chord" :postid="$song->chord->id"
                route="{{ route('comments.store') }}" />

        </div>
    @else
        <h1 class="text-center">Esta canción aún no tiene acordes</h1>
    @endif

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/PDF/PDF.js') }}"></script> --}}
    <script type="module" src="{{ asset('js/Song/SongView.js') }}"></script>
    <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script>
    <script type="module" src="{{ asset('js/Chord/ChordView.js') }}"></script>
@endsection
