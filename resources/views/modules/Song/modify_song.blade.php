@extends('layouts.app')

@section("content")

<style>
    #structure{
        
        line-height: 2;

    }

</style>



<div class="d-flex ms-5 my-3 gap-2">
    <a href="{{route('song_modify')}}"><button class="mt-1 btn btn-primary"><i class="fas fa-arrow-left"></i></button></a>
    <h1 class="">{{$song->name}}</h1>

    
</div>


<form action="{{route("song_modify_validate")}}" id="modify">
    @method("POST")
    @csrf
    <input type="hidden" id="output_value" name="output_value">
    <input type="hidden" value="{{$song->id}}" name="id">

    <div class="d-flex justify-content-center my-4">
        <button type="button" class="mt-1 btn btn-danger me-2">Deshacer Cambios <i class="fas"></i>
            <button type="submit" class="mt-1 btn btn-success">Guardar Cambios <i class="fas"></i>
    </div>
</form>



<div contenteditable="true" spellcheck="false" class="m-auto text-center structure" id="structure">
    {!! $song->structure !!}
</div>


<script type="module" src="{{asset("js/Song/SongModify.js")}}"></script>
<script type="module" src="{{asset("js/Song/SongPrevModify.js")}}"></script>
@endsection