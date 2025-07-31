@extends('layouts.app')

@section('content')
<h1 class="ms-5 py-3 ">
    Canciones
</h1>
<h3 class="ms-5 pb-3 ">
    Aquí encontrarás todas las canciones disponiles
</h3>



<h4 class="ms-5 pb-3">Géneros</h4>


<div class="ms-5">
    <button class="btn btn-primary active ">Todos</button>
    <button class="btn btn-primary mx-3">Pop</button>
    <button class="btn btn-primary ">Rock</button>
    <button class="btn btn-primary mx-3">Balada</button>
    <button class="btn btn-primary ">Bossa Nova</button>
</div>

<div class="ms-5 me-3 row justify-content-center">

<div class="row">


@forelse ($songs as $song)

            
                <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                    <div class="d-flex">

                        <div>
                            <img width="100px" height="100px"
                                src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">

                        </div>
                        <div class="ms-3">
                            <a class="link-dark" href="{{route("song", $song->id)}}">
                                <h4>{{$song->name}}</h4>
                                <p>{{$song->author}}</p>
                            </a>
                        </div>

                    </div>
                </div>
    
@empty
    
<div>
    no hay mas canciones
</div>
@endforelse
</div>


</div>

@endsection