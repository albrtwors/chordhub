@extends('layouts.app')
@section('content')
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }

        .chord-card {
            height: 250px;
            width: 190px;
            overflow: hidden;

            border-radius: 20px;

        }

        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            background: rgb(180, 226, 255);
            color: rgb(72, 72, 72);
            font-size: 0.9em;
            font-style: italic;
            font-weight: bold;
        }

        .chord.chord-small {
            font-size: 0.7em;
            letter-spacing: 0.001px;
        }

        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;

        }
    </style>


    <x-react.vite-refresh path="resources/react/comments/entry.jsx" />
    @vite('resources/react/pdf/entrychords.jsx')
    
    @if ($chords)
      
        <input type="text" id="songjson" value="{{ $chords->structure }}" class="d-none">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
                <div class="d-flex ms-5 my-3 gap-2">

                    <h1 class="fw-bold">{{ $song->name }}</h1>
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
                <div class="d-flex my-3">
                    <h6 class="me-1 uploadedby mt-2">Armonizado por: <b>{{ $chords->user->roles->first()->name }}</b>
                        {{ $chords->user->name }} </h6> <img class="img-profile rounded-circle" width="32"
                        height="32"
                        src="{{ $chords->user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}"></img>
                </div>

            </div>

           
                <div id="pdf-exporter"></div>
           


        </div>

        <div class="p-5 m-auto">
            <div class="text-start structure " id="structure">


            </div>

        </div>


        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-primary" id="chord_up_half">1/2+</button>
            <button class="btn btn-primary" id="chord_down_half">1/2-</button>
        </div>

        <x-comments.comment-meta id="{{ $chords->id }}" type="chord" />
        <div id="comment-widget"></div>


        {{-- <div class="d-flex flex-column  mt-3 justify-content-center">
            <div class="p-1">
                <h6 class="fw-bold">Version Eliud Correa</h6>
            </div>
            <div class="chord-card">
                <img width="500px" height="auto" src="{{ asset('css/mi_div.png') }}" alt="">
            </div>
        </div> --}}
        <div class="d-none" id="editMenu"></div>
    @else
        <h1 class="text-center">Esta canción aún no tiene acordes</h1>
    @endif

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
    {{-- <script type="module" src="{{ asset('js/Song/SongDelete.js') }}"></script> --}}
    <script type="module" src="{{ asset('js/Chord/ChordView.js') }}"></script>
@endsection
