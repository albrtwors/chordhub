@extends('layouts.app')
@section('content')
<div class="row gap-2">
    <x-react.vite-refresh path="resources/react/practice/components/Participants.jsx" />
    <x-app.page-header text="Organizar un Ensayo"/>
    <form  id="practice-form" action="{{ route('ensayos.store') }}">
    @method('POST')
    @csrf
    <div class="mx-5 d-flex flex-column gap-2">
        <h5 class="fw-bold">Detalles del Ensayo</h5>
        <p>Completa la información sobre la fecha, hora, detalles, lugar....</p>


        <div class="row gap-2">
            
            <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Fecha</label>
                <input name="performDate" id="performDate" class="form-control" type="date">
            </div>
             <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Hora de Inicio</label>
                <input name="startHour" class="form-control" type="time">
            </div>
            
            <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Hora de Cierre</label>
                <input name="endHour" class="form-control" type="time">
            </div>
            

        </div>
        
        <div class="d-flex gap-2 flex-column">
            <label for="" class="fw-bold">Ubicación</label>
            <div class="ms-0 col-xl-3 col-md-8 col-sm-8 col-8 position-relative">

                <input name="location" placeholder="Maracay Av Bolivar..." class="form-control"  type="text">
                <i style="color: #2c2c2c; top:10px; right:30px;" class="position-absolute  fas fa-map">

                </i>
            </div>


        </div>

        <label for="" class="fw-bold">Nombre del ensayo</label>
        <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
            
            <input name="name" placeholder="Ensayo dia de la familia..." name="performDate" id="name" class="form-control" type="text">
        </div>


        <div class="d-flex mt-3 flex-column">
            <h5 class="fw-bold">Logística y Preparación</h5>
            <p>Define quienes van a participar y los aditamentos necesarios</p>

            <div id="participants-widget">

            </div>

            <div class="d-flex mt-3">
                <button type="submit" class="btn btn-primary">
                    Crear el Ensayo
                </button>
            </div>

        </div>
        
    </div>
    </form>
</div>

@push('scripts')
    <script type="module" src="{{ asset('js/Practice/Create.js') }}"></script>
@endpush
@endsection
