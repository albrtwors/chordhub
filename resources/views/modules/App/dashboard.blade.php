@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column gap-3 ">

        
        <div class="d-flex gap-3">        
            <div class="d-flex flex-column">
                <h1 class="fw-bold">Bienvenido  <x-utils.role-label :role="Auth::user()->roles->first()->name" /> {{Auth::user()->name}}</h1>
            </div>
          
        </div>
       
        

        @role('admin')
            <x-dashboard.admin-process/>
        @endrole

        @role('singer')
            <x-dashboard.sing-process />
        @endrole

        @role('musician')
            <x-dashboard.chord-process/>
        @endrole
        
       
      
     

        

        <!-- Begin Page Content -->
        <div class="container-fluid row">

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
        @endsection
