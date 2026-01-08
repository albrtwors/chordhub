@extends('layouts.app')
@section('content')
    <x-app.page-header text="Registro de actividad"/>
 <div>



    <div class="d-flex flex-column align-items-center justify-items-start">

        <div class="d-flex justify-content-center gap-2">
            <select class="form-control w-25" wire:model.live="quantity">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <x-normal-input />
        </div>

    </div>
 

    <div class="container-fluid d-flex justify-content-center mt-3">
        <table class="container-fluid">
            <thead>
                <tr>
          
                    <th wire:click="sorting('name')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Descripción
              


                    </th>
                    <th wire:click="sorting('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Fecha
           

                    </th>
                    <th class="bg-primary p-2 text-white">Tiempo Transcurrido</th>

                    
                </tr>
            </thead>


    </div>
    @foreach ($logs as $index=>$log)
        <tr class="p-3 {{ $index%2==0?'bg-primary-subtle':'bg-white' }}">
   
            <td>

                {{ $log->name }}
            </td>
            <td>{{ $log->created_at }}</td>
            <td>{{$log->created_at->diffForHumans()}}</td>

        </tr>
    @endforeach


    </table>
</div>   
@endsection