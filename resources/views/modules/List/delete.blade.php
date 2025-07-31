@extends('layouts.app')

@section('content')

<h1 class="ms-5 py-3">
    Eliminar Cancionero
</h1>
<h3 class="ms-5 pb-3">
    Elimina el cancionero subido por ti que no necesites
</h3>


<form action="" id="filler" class="d-none"></form>
<div class="row ms-3 ">
@forelse($lists as $li)
    
    <div class="col-xl-4 col-md-10 col-sm-10">

        <blockquote class="p-3 quote-box">

            <p class="quote-text">
                {{$li->date}}
            </p>
            <hr>
            <div class="blog-post-actions">
                <p class="blog-post-bottom pull-left">
                    {{$li->name}}
                </p>
                {{-- <p class="blog-post-bottom pull-right">
                    <span class="badge quote-badge">743</span>  ❤
                </p> --}}
            </div>
            
            <button data-id="{{$li->id}}" onclick="listDelete(this)" class="btn btn-danger" type="button">
                <i class="fas fa-trash fa-sm"></i>
            </button>
        </blockquote>

    </div>
    
@empty
@endforelse
  <script type="module" src="{{asset("js/List/SongListDelete.js")}}"></script>
</div>

@endsection