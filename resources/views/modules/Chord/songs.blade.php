@extends('layouts.app')
@section('content')
    <h1 class="ms-5 fw-bold">Editar Acordes</h1>
    <h3 class="ms-5">Elige la canción a editar</h3>

    @livewire('chord.chords')
    {{-- <x-songsearchbar route="{{route('acordes.search')}}" :genre="$genre">

</x-songsearchbar>


<div class="ms-5 me-3 row justify-content-center">

<div id="song_row" class="row">


@forelse ($songs as $song)

            
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                    <div class="d-flex">

                        <div>
                            <img width="100px" height="100px"
                                src="{{$song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'}}" alt="">

                        </div>
                        <div class="ms-3">
                            <a class="link-dark" href="{{route("acordes.edit", $song->id)}}">
                                <h4>{{$song->name}}</h4>
                                <p>{{$song->author->name}}</p>
                            </a>
                        </div>

                    </div>
                </div>
    
@empty
    
<div>
    No hay canciones
</div>
@endforelse
</div>


</div>

<div class="m-auto mt-5">
    {{$songs->links()}}
</div> --}}
    <script type="module" src="{{ asset('js/Search/SearchSong.js') }}"></script>
@endsection
