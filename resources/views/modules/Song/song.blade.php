@extends("layouts.app")
@section("content")
<style>
    #structure{
        
        line-height: 2;

    }

</style>
<div class="d-flex ms-5 my-3 gap-2">
    <a href="{{route('songs')}}"><button class="mt-1 btn btn-primary"><i class="fas fa-arrow-left"></i></button></a>
    <h1 class="">{{$songs->name}}</h1>
</div>

<div   class="m-auto text-center structure" id="structure">
    {!! $songs->structure !!}
</div>



@endsection