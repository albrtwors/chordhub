@props(['maxSize'])
<div class="col-xl-{{ $maxSize }} mt-xl-3 mt-3 mt-md-3 mt mt-sm-3 col-md-6 col-sm-12">
    <div class="rounded p-3 shadow-sm">
        {!! $slot !!}
    </div>
</div>
