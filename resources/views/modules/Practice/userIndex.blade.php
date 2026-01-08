@extends('layouts.app')

@section('content')
    <x-app.page-header text="Tus Ensayos"/>
    <div class="d-flex ms-5 flex-column gap-3">
        
        <h4 class="fw-bold">
            Ensayos Organizados Por Ti
        </h4>
        @livewire('practices.own-practices', ['practices'=>$practices])

    
         <h4 class="fw-bold">
            Ensayos Pendientes
        </h4>     
        @livewire('practices.pending-practices', ['userPractices'=>$userPractices])
     
    </div>

@endsection

