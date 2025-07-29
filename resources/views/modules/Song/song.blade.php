@extends("layouts.app")
@section("content")
<style>
    #structure{
        
        line-height: 2;

    }

</style>

<div class="row">
    <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
        <div class="d-flex ms-5 my-3 gap-2">
            <a href="{{route('songs')}}"><button class="mt-1 btn btn-primary"><i
                        class="fas fa-arrow-left"></i></button></a>
            <h1 class="">{{$songs->name}}</h1>
        </div>
    </div>
    <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
        <div class="d-flex my-3">
            <h6 class="me-1 mt-2">Subido por: {{$user->name}} </h6> <img class="img-profile rounded-circle" width="32" height="32" src="{{$user->pfp}}"></img>
        </div>
    </div>

</div>


<div   class="m-auto text-center structure" id="structure">
    {!! $songs->structure !!}
</div>



@endsection