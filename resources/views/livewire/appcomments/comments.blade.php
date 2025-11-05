<div>
    @foreach ($comments as $comment)
        @livewire('appcomments.item', ['comment' => $comment, 'postId' => $postId, 'type' => $type, 'route' => $route])
    @endforeach
</div>
