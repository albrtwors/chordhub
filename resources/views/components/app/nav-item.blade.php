<li class="nav-item {{ $isActive ? 'active' : '' }}">
    <a class="nav-link" href="{{ $route }}">
        <i class="fas fa-fw fa-{{ $icon }}"></i>
        <span>{{ $text }}</span></a>
</li>
