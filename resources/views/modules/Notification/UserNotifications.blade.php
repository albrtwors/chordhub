@extends('layouts.app')
@section('content')
<h1 class="ms-5 fw-bold">Notificaciones</h1>
<div class="row m-5">

  <p class="dismiss text-right"><a id="dismiss-all" href="{{route('notifications.read')}}">Marcar como Leídas</a></p>
  @forelse($notifications as $not)
  <x-notification-banner>
    <x-slot name="title">
        {{$not->data['message']}}
    </x-slot>

    <x-slot name="route">
        {{route('notification.readAsGet', $not->id)}}
    </x-slot>
    <x-slot name="id">
        {{$not->id}}
    </x-slot>
  </x-notification-banner>

  @empty
  <h6>No hay notificaciones</h6>
  @endforelse



  
  
</div>
@endsection



