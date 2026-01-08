
<div class="file-card col-xl-3 col-md-6 col-sm-6 col-12 ">
    @props(['type','author', 'name', 'songs', 'id'])

    @if($type=="show")
        <a class="song-card-anchor"  href="{{ route('cancioneros.show', $id) }}">
            <div class="d-flex align-items-center flex-column gap-1">
                <div class="d-flex p-5" >
                    @foreach($songs as $index => $song)
                        @php
                            if($index>=5){
                                break;
                            }

                        
                        @endphp
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="{{ $song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}">
                        </img>
                    @endforeach
                </div>
                <h4 class="fw-bold">{{ $name }}</h4>
                <h5 class="fw-bold">{{ $author }}</h5>
            </div>
        </a>
    @elseif($type=="edit")
         <a class="song-card-anchor"  href="{{ route('cancioneros.edit', $id) }}">
            <div class="d-flex align-items-center flex-column gap-1">
                <div class="d-flex p-5" >
                    @foreach($songs as $index => $song)
                        @php
                            if($index>=5){
                                break;
                            }

                        
                        @endphp
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="{{ $song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}">
                        </img>
                    @endforeach
                </div>
                <h4 class="fw-bold">{{ $name }}</h4>
                <h5 class="fw-bold">{{ $author }}</h5>
            </div>
        </a>   
    @elseif($type=="destroy")

            <div class="d-flex align-items-center flex-column gap-1">
                <div class="w-100">
                    <i wire:click="showDelete({{ $id }})" class="fas fa-trash bg-danger round-circle " style="border-radius:100%; background:red; padding:10px; color:white">

                    </i>
                </div>
                <div class="d-flex p-5" >
                    @foreach($songs as $index => $song)
                        @php
                            if($index>=5){
                                break;
                            }

                        
                        @endphp
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="{{ $song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png' }}">
                        </img>
                    @endforeach
                </div>
                <h4 class="fw-bold">{{ $name }}</h4>
                <h5 class="fw-bold">{{ $author }}</h5>
            </div>
        
    @endif


</div>