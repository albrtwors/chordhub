@extends("layouts.app")

@section("content")
<h1 class="ms-5">{{$list->name}}</h1>

<ul class="list-group m-5">
   @foreach($list->songs as $song) 
  <a href="{{route("song", $song->id)}}"><li class="list-group-item">{{$song->name}}</li></a>
 @endforeach
</ul>

@endsection