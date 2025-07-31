@extends('layouts.app')

@section('content')

<h1 class="ms-5 py-3">
    Cancioneros
</h1>
<h3 class="ms-5 pb-3">
    Aquí encontrarás todos los cancioneros disponibles
</h3>

<?php $arrayxd = array(
    "song1"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"),
    "song2"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"),
    "song3"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"),
    "song4"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"),
    "song5"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"),
    "song6"=>array("name"=>"Culto para la familia", "date"=>"27/3/20"))
?>


<div class="row ms-3 ">
@forelse($lists as $li)
    
    <div class="col-xl-4 col-md-10 col-sm-10">
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
                {{-- <p class="blog-post-bottom pull-right">
                    <span class="badge quote-badge">743</span>  ❤
                </p> --}}
            </div>
        </blockquote>
        </a>
    </div>
    
@empty
@endforelse
  
</div>




@endsection