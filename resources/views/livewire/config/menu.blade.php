<div class="flex mx-5 flex-column gap-3">
    
    <div class="flex gap-3">
        <button  wire:click="$set('view','logs')" class="btn {{ $view =='logs'?'bg-primary-subtle text-primary':'' }} ">
            Logs
        </button>
        <button wire:click="$set('view', 'db')" class="btn {{ $view =='db'?'bg-primary-subtle text-primary':'' }}">
            Respaldar Base de Datos
        </button>
    

    </div>
    <div class="p-1"></div>
    <div class="{{ $view =='db' ? 'd-none' :'' }}">
        @livewire('admin.logs-table')
    </div>
    @if($view=='logs')

    @else
        <h3 class="fw-bold mt-3">Respaldar Base de Datos</h3>
        <p>Haz click en el botón para hacer un respaldo de la base de datos</p>
        
        <button wire:click="restoreDB" class="btn btn-primary">Respaldar</button>
        
    @endif


</div>