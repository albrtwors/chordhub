<div class="ms-3">
    <div class="d-flex flex-xl-row flex-md-column flex-sm-column flex-column">
        <div class="col-2">
            <img src="{{ $comment->user->image->url ?? 'https://i.pinimg.com/originals/13/d4/67/13d4670b367d0413b0d97affc2286c4c.jpg' }}"
                width="100px" height="100px" alt="">
        </div>
        <div class="col-6">
            <h3 class="fw-bold">{{ $comment->user->name }}</h3>
            <p>{{ $comment->comment }}</p>
        </div>

    </div>


    <button class="btn btn-primary my-3 me-3" data-toggle="collapse" data-target="#answer-{{ $comment->id }}">
        Responder
    </button>
    @if ($comment->responses->count() > 0)
        <button class="btn btn-primary" data-toggle="collapse" data-target="#answers-{{ $comment->id }}">
            Mostrar respuestas ({{ $comment->responses->count() }})
        </button>
    @endif


    <div id="answer-{{ $comment->id }}" class="collapse">
        @livewire('appcomments.form', ['postId' => $comment->id, 'type' => $type, 'parentId' => $comment->id])
    </div>

    @if (isset($comment->responses))
        <div id="answers-{{ $comment->id }}" class="collapse">
            @livewire('appcomments.comments', ['postId' => $postId, 'type' => $type, 'route' => $route, 'hasResponses' => true, 'parentId' => $comment->id])
        </div>
    @endif

</div>
