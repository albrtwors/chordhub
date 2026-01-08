


<div id="song_template" class="col-xl-3 col-md-6 col-sm-12 mt-3 song-card">
  @props(['author', 'name', 'image', 'type', 'id']) 

  @if($type=='create')
  <a class="song-card-anchor" href="{{route('chordsCreate', $id)  }}">
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
  <a class="song-card-anchor" href="{{route('chordsEditSong', $id)  }}">
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
  @elseif($type=="delete")
    <a class="song-card-anchor" href="{{route('chordsDeleteIndex', $id)  }}">
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
  @else
    <a class="song-card-anchor" href="{{route('chord.versions', $id)  }}">
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
  @endif
</div>
