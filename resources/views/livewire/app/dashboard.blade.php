<div class="container ">

    <h1 class="fw-bold">Bienvenido {{ Auth::user()->name }}</h1>

    <div class="row justify-content-center">

        <div class="col-xl-6  col-md-12">
            <div class="d-flex justify-content-center">
                <img class="pfp my-3"
                    src="{{ Auth::user()->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}"
                    width="200px" height="200px" alt="">
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <!-- Inicio, Datos del Usuario -->
            <div class="mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a
                                    href="
                                    @if ($topSong) {{ route('canciones.show', $topSong->id) }}
                                    @else
                                        'no hay entradas' @endif 
                                     ">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Canción más buscada</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $topSong->name ?? 'No hay entradas' }}</div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inicio, cancion mas popular -->
            <div class=" mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">

                            <div class="col mr-2">

                                <a
                                    href="
                                    @if ($lastSong) {{ route('canciones.show', $lastSong->id) }}
                                    @else
                                        'no hay entradas' @endif 
                                     ">

                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Última Canción Añadida</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $lastSong->name ?? 'No hay entradas' }}</div>
                                </a>
                            </div>

                            <div class="col-auto">
                                <i class="fas fa-music fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="row">

            <!-- Aportes del usuario -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tus aportes al
                                    repositorio
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{ $userSongs->count() == 1 ? $userSongs->count() . ' Canción añadida' : $userSongs->count() . ' Canciones añadidas' }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aportes del usuario numero de canciones -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    CANCIONES DISPONIBLES</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $songs->count() == 1 ? $songs->count() . ' Canción añadida' : $songs->count() . ' Canciones añadidas' }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-guitar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Chart de generos mas populares -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Géneros más populares</h6>


                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Chart pie de tonalidades mas usadas  -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tonalidades más usadas</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Chart pie de contribuidores -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Mayores Contribuidores</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieContributorChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Chart area de canciones mas populares -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Canciones más populares</h6>


                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaSongChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->

        </div>






        <div class="row">

            <!-- Chart area de cancioneros mas visitados -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Cancioneros más visitados</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaFileChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Chart pie de canciones mas listadas -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Canciones más listadas</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myListedChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Pie Chart -->

        </div>






        <div class="row">

            {{-- <!-- Chart area de cancioneros mas visitados -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Acordes más consultados</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaSongChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}



            <input id="topGenresValue" type="hidden" value="{{ $topGenreJson }}" name="">
            <input id="topContributors" type="hidden" value="{{ $topContributors }}" name="">
            <input id="topTonalities" type="hidden" value="{{ json_encode($topTonalities) }}" name="">
            <input id="topSongVisitsValue" type="hidden" value="{{ $topSongJson }}" name="">
            <input id="topFilesValue" type="hidden" value="{{ $topFilesJson }}" name="">
            <input id="mostListedSongs" type="hidden" value="{{ $mostListedSongs }}" name="">


            <!-- Pie Chart -->

        </div>


        <!-- Content Row -->
        <div class="row d-flex justify-content-center">

            <!-- Content Column -->
            <div class="col-lg-7 mb-4">

                <!-- Color System -->
                @php
                    $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark'];
                    $index = 0;

                @endphp

                <div class="row">
                    <h6 class="fw-bold text-center">Géneros Disponibles</h6>
                    @foreach ($genres as $genre)
                        @php
                            if ($index === 7) {
                                $index = 0;
                            }

                        @endphp

                        <div class="col-lg-6 mb-4">
                            <div class="card bg-{{ $colors[$index] }} text-white shadow">
                                <div class="card-body">
                                    {{ $genre->name }}

                                </div>
                            </div>
                        </div>
                        @php
                            $index++;
                        @endphp
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Page level custom scripts -->
        @push('scripts')
            <script src="{{ asset('templates/userpanel/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('templates/userpanel/js/demo/chart-pie-demo.js') }}"></script>
            <script src="{{ asset('templates/userpanel/js/demo/chart-area-songs-demo.js') }}"></script>
            <script src="{{ asset('templates/userpanel/js/demo/chart-pie-contributor-demo.js') }}"></script>
            <script src="{{ asset('templates/userpanel/js/demo/chart-pie-file-demo.js') }}"></script>
            <script src="{{ asset('templates/userpanel/js/demo/chart-pie-listed-songs.js') }}"></script>
        @endpush

    </div>
</div>
