<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">

            <select wire:model.live="genreId" class="w-25 form-control">
                <option value="{{ null }}">Todos</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div class="d-flex justify-content-center mt-2">
        {{ $songs->links() }}
    </div>
    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            @forelse ($songs as $song)
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                    <div class="d-flex">

                        <div>
                            <img width="100px" height="100px"
                                src="{{ $song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }} "
                                alt="">

                        </div>
                        <div class="ms-3">
                            <a class="link-dark" href="{{ route('acordes.edit', $song->id) }}">
                                <h4>{{ $song->name }}</h4>
                                <p>{{ $song->author->name }}</p>
                            </a>
                        </div>

                    </div>
                </div>

            @empty

                <div>
                    No hay canciones subidas
                </div>
            @endforelse
        </div>


    </div>
    {{-- <div class="m-auto mt-5">
        {{ $songs->links() }}
    </div> --}}
</div>
