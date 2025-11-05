<div>
    <form wire:submit="save" id="Comment" method="post" class="form-group" action="{{ $route }}">
        @csrf
        @method('POST')
        @if ($parentId)
            <input value="{{ $parentId }}" name="parentid" type="hidden">
        @else
            <input value="" name="parentid" type="hidden">
        @endif
        <input type="hidden" value="{{ $postId }}" name="postid">
        <input type="hidden" value="{{ $type }}" name="postype">
        <textarea wire:model="comment" class="form-control my-3 col-5" name="comment" id="" data-user-id="32"
            rows="5"></textarea>
        <input class="btn btn-primary" type="submit" value="Subir Respuesta">

    </form>

</div>
