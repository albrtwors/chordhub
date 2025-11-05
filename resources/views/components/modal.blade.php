@php
    if ($state == true) {
        $class = 'fade-modal show';
    } else {
        $class = 'fade-modal';
    }
@endphp
<div class="modal-container {{ $class }}">
    <div class="modal-section">
        <header>
            <h3 class="fw-bold">{{ $head }}</h3>
        </header>
        <main>
            {{ $content }}
        </main>
        <footer>
            {{ $footer }}
        </footer>
    </div>
</div>
