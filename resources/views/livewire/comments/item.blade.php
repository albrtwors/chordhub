<div>
    <div wire:key="comentario-nro-{{ $comment->id }}" class="ms-5">
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
        <button class="btn btn-primary my-3" data-toggle="collapse" data-target="#answer-{{ $comment->id }}">
            Responder
        </button>
        @livewire('comments.form', ['postId' => $comment->commentable_id, 'posType' => $comment->commentable_type, 'parentId' => $comment->id, 'isFirstComment' => false, 'commentId' => $comment->id], key($comment->id))
        @if (isset($comment->responses))
            @livewire('comments.comment-section', ['postid' => $comment->commentable_id, 'postype' => 'App\Models\Chord', 'parentid' => $comment->id, 'comments' => $comment->responses, 'isResponse' => true], key($comment->id))
        @endif



    </div>
</div>
