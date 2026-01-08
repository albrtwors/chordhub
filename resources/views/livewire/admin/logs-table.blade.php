<div>

    <div style="overflow-x:scroll" class="d-flex gap-3 mx-5 ">

      
        
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Paginación</label>
                <select class="form-control" wire:model.live="quantity">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>

                
            </div>

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Descripción</label>
                <x-normal-input />
            </div>

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Desde</label>
                <input wire:model.live="startDate" type="date" class="form-control">
                
            </div>
            
             <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Hasta</label>
                <input wire:model.live="endDate" type="date" class="form-control">
            </div>      

    </div>
    <div class="d-flex justify-content-center gap-5 mt-3">
        {{count($logs) > 0 ? $logs->links(data: ['scrollTo' => false]) : '' }} 

    </div>

    <div class="mx-3" style="min-width:full; overflow-x:scroll">
        <table class="container-fluid">
            <thead>
                <tr>
                    <th wire:click='' style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id
                        @if ($order == 'id')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th wire:click="" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Descripción
                        @if ($order == 'name')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif


                    </th>
                    <th wire:click="sorting('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Usuario
                        @if ($order == 'email')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th class="bg-primary p-2 text-white">Fecha</th>

                    <th class="bg-primary p-2 text-white">Tiempo Transcurrido</th>
                </tr>
            </thead>


    </div>
    @foreach ($logs as $index => $item)
        <tr  class="p-3 rowitem {{ $index%2==0?'bg-primary-subtle':'bg-white' }}" wire:key="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>

                {{ $item->name }}
            </td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->created_at }}</td>

            <td>
            {{ $item->created_at->diffForHumans() }}    

            </td>
        </tr>
    @endforeach
           <input id="visible-data" class="d-none fafafa" value="{{ $logs->getCollection() }}" type="text">


    {{-- <livewire:admin.users-table-body :users="$users->pluck('id', 'name', 'email', 'active')->toArray()" />
 --}}

</table>

</div>

<div wire:ignore class="d-flex justify-content-center my-3 gap-2">
    <div id="pdf-exporter"></div>
</div>
