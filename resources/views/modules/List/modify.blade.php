@extends('layouts.app')

@section('content')
    <h1 class="ms-5 py-3 fw-bold">
        Modificar cancionero
    </h1>
    <h3 class="ms-5 pb-3">
        Modifica tus cancioneros
    </h3>

    @livewire('File.files', ['type' => 'edit'])






    {{-- <div class="col-xl-4 col-md-10 col-sm-10">
        <a href="{{route("list", $li->id)}}">
        <blockquote class="p-3 quote-box">

            <p class="quote-text">
                {{$li->date}}
            </p>
            <hr>
            <div class="blog-post-actions">
                <p class="blog-post-bottom pull-left">
                    {{$li->name}}
                </p>

            </div>
        </blockquote>
        </a>
    </div>
     --}}
@endsection
