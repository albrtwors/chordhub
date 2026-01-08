    <div class="mb-4 col-xl-6 col-md-6 col-12 col-sm-12">
        @props(['topSong', 'color', 'title', 'icon', 'route'])
        <div class="card border-left-{{ $color }} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a
                            href="
                        @if ($route) {{ $route }}
                        @else
                            'no hay entradas' @endif 
                        ">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {{ $title }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $topSong->name ?? 'No hay entradas' }}</div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-{{ $icon }} fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>