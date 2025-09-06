<form id="Comment" method="post" class="form-group" action="{{ $route }}">
    @csrf
    @method('POST')
    @if ($parentid)
        <input value="{{ $parentid }}" name="parentid" type="hidden">
    @else
        <input value="" name="parentid" type="hidden">
    @endif
    <input type="hidden" value="{{ $postid }}" name="postid">
    <input type="hidden" value="{{ $postype }}" name="postype">
    <textarea class="form-control my-3 col-5" name="comment" id="" data-user-id="32" rows="5"></textarea>
    <input class="btn btn-primary" type="submit" value="Subir Respuesta">

</form>
