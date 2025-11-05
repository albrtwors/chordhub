@props(['gap'])
<div class="d-flex align-items-center gap-{{ $gap }} flex-column">
    {{ $slot }}
</div>
