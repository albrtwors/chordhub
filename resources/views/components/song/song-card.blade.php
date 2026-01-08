


<div id="song_template" class="col-xl-3 col-md-6 col-sm-12 mt-3 song-card">
  @props(['author', 'name', 'image', 'type', 'id'])

  @if($type=='show')
  <a class="song-card-anchor" href="{{route('canciones.show', $id)  }}">
    <div class="d-flex flex-column gap-3 align-items-center">
        <img src="{{ $image }}" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                {{ $name }}
            </h4>
            <h5 class="fw-bold">
                {{ $author }}
            </h5>
        </div>

    </div>
 </a>
  @elseif($type=='edit')
  <a class="song-card-anchor" href="{{route('canciones.edit', $id)  }}">
    <div class="d-flex flex-column gap-3 align-items-center">
        <img src="{{ $image }}" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                {{ $name }}
            </h4>
            <h5 class="fw-bold">
                {{ $author }}
            </h5>
        </div>

    </div>
</a>
  @elseif($type=="destroy")

    <div class="d-flex flex-column gap-3 align-items-center">
        <div class="w-100 d-flex justify-content-start">
            <i wire:click="showDelete({{ $id }})" class="fas fa-trash bg-danger round-circle " style="border-radius:100%; background:red; padding:10px; color:white">

            </i>
        </div>

        <img src="{{ $image }}" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                {{ $name }}
            </h4>
            <h5 class="fw-bold">
                {{ $author }}
            </h5>

        </div>

    </div>

  @endif
</div>
