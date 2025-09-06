@extends("layouts.app")

@section("content")
<h1 class="fw-bold ms-5">{{$list->name}}</h1>
<div class="d-flex justify-content-center gap-3 my-3">
   
    <a class="" href="{{route('cancioneros.edit', $list->id)}}"><button class="btn btn-success">Modificar</button></a>
    <form id="delform" action="{{route('cancioneros.destroy', $list->id)}}">
      @csrf
      @method('DELETE')  
     <button  data-id="{{$list->id}}" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<ul class="list-group m-5">
   @foreach($list_songs as $song) 
  <a href="{{route('canciones.show', $song->id)}}"><li class="list-group-item">{{$song->name}}</li></a>
 @endforeach
</ul>


<div class="m-5 p-5 border">
    <h3 class="fw-bold mb-5">Comentarios</h3>
    <x-comments.comments route="{{route('comments.store')}}" postype="App\Models\File" :postid="$list->id" :list="$comments"/>
        
    <x-comments.form :parentid="null" postype="App\Models\File" :postid="$list->id" route="{{route('comments.store')}}"/>    
       
</div>

<script type="module" src="{{asset('js/List/SongListDelete.js')}}"></script>
@endsection