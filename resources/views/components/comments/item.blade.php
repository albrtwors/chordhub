<div {{ $attrs ?? 'ms-5' }}>
    <div class="d-flex flex-xl-row flex-md-column flex-sm-column flex-column">
        <div class="col-2">
            <img src="{{ $itemxd->user->image->url ?? 'https://i.pinimg.com/originals/13/d4/67/13d4670b367d0413b0d97affc2286c4c.jpg' }}"
                width="100px" height="100px" alt="">
        </div>
        <div class="col-6">
            <h3 class="fw-bold">{{ $itemxd->user->name }}</h3>
            <p>{{ $itemxd->comment }}</p>
        </div>

    </div>
    <button class="btn btn-primary my-3 me-3" data-toggle="collapse" data-target="#answer-{{ $itemxd->id }}">
        Responder
    </button>
    @if ($itemxd->responses->count() > 0)
        <button class="btn btn-primary" data-toggle="collapse" data-target="#answers-{{ $itemxd->id }}">
            Mostrar respuestas ({{ $itemxd->responses->count() }})
        </button>
    @endif
    <div id="answer-{{ $itemxd->id }}" class="collapse">
        <x-comments.form :parentid="$itemxd->id" :postype="$postype" :postid="$postid" :route="$route">

            </x-comments>
    </div>
    @if (isset($itemxd->responses))
        <x-comments.comments id="answers-{{ $itemxd->id }}" class="collapse ms-5" :route="$route" :postype="$postype"
            :postid="$postid" :list="$itemxd->responses">

        </x-comments.comments>
    @endif



</div>
