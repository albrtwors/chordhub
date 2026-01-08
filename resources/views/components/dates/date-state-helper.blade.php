<div>
@props(['date'])
    @if(Carbon\Carbon::parse($date)->isPast())
        <div class="btn btn-primary-subtle bg-danger-subtle text-danger">
            Finalizado
        </div>
    @elseif(Carbon\Carbon::parse($date)->isToday())
        <div class="btn btn-primary-subtle bg-success-subtle text-success">
            Hoy
        </div>                
    @else
        <div class="btn btn-primary-subtle bg-primary-subtle text-primary">
            Por Realizar
        </div>               
    @endif
</div>