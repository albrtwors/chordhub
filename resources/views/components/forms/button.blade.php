@props(['color', 'text', 'submit'])
@php
    if(!isset($color)){
        $color = 'primary';
    }
@endphp
@if (isset($submit))
    <button type="submit" {{ $attributes->class(["btn btn-$color"]) }}>
        {{ $text }}
    </button>
@else
    <button type="button" {{ $attributes->class(["btn btn-$color"]) }}>
        {{ $text }}
    </button>
@endif


