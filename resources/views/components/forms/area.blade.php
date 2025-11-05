@if ($type == 'song')
    <textarea spellcheck="false" class="form-control round-md container" id="{{ $id }}" rows="10">
Estrofa

Precoro

Coro

Puente
</textarea>
@elseif($type == 'chord')
    <textarea spellcheck="false" class="form-control round-md container" id="{{ $id }}" rows="10">

</textarea>
@endif
