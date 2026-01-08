<div>



    <div style="overflow-x:scroll" class="d-flex gap-3 mx-5 ">

       
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Tipo</label>
                <select class="form-control" wire:model.live="viewOption">
                    <option value="song">Cancion</option>
                    <option value="file">Cancionero</option>
                    <option value="chord">Acorde</option>
                </select>

            </div>
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Paginación</label>
                <select class="form-control" wire:model.live="quantity">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>

                
            </div>

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Nombre</label>
                <input type="text" class="form-control" wire:model.live="name" placeholder="Publicacion...">
            </div>
            
       

    </div>
    <div class="d-flex justify-content-center gap-5 mt-3">
        {{ count($posts) > 0 ? $posts->links(data: ['scrollTo' => false]) : '' }}

    </div>
    
    <div style="overflow-x:scroll; min-width:full;" class="mx-3">
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
                        Nombre
                        @if ($order == 'name')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif


                    </th>
                    <th wire:click="" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Autor
                        @if ($order == 'email')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                      @if($viewOption!='song'&&$viewOption!='file')
                      <th class="bg-primary p-2 text-white">Canción</th>  
                      @endif
                    <th class="bg-primary p-2 text-white">Fecha</th>

                    <th class="bg-primary p-2 text-white">Opciones</th>
                </tr>
            </thead>


    </div>
    @foreach ($posts as $index => $item)
        <tr class="p-3 {{ $index%2==0?'bg-primary-subtle':'bg-white' }}" wire:key="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>

                {{ $item->name }}
            </td>
            <td>{{ $item->user ? $item->user->name : 'null' }}</td>
            @if($viewOption!='song'&&$viewOption!='file')
                <td>{{ $item->song->name }}</td>
            @endif
            <td>{{ $item->created_at }}</td>

            <td>
                <a class="text-decoration-none" 
                href="@php 
                    if($viewOption=='song'){
                        echo route('canciones.edit', $item->id);
                    }elseif($viewOption=='file'){   
                        echo route('cancioneros.edit', $item->id);
                    }else{
                        echo route('acordes.edit', $item->id);
                    }
                
                @endphp
                
                ">
                    <button class="btn fs-50 btn-primary cargar-info">
                        Modificar
                    </button>
                </a>

               
                <button wire:click="handleDelete({{ $item->id }})" class="btn fs-50 btn-danger">Eliminar
                </button>
               

            </td>
        </tr>
    @endforeach
    {{-- <livewire:admin.users-table-body :users="$users->pluck('id', 'name', 'email', 'active')->toArray()" />
 --}}




    </table>

    </div>
     <x-modal state="{{ $delete_modal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Eliminar {{$selectedPost->name}}</h3>

        </x-slot>
        <x-slot name="content">
            <h4>Estás seguro de que quieres eliminar <b>{{ $selectedPost->name }}</b></h4>
        </x-slot>

        <x-slot name="footer">

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('delete_modal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="delete({{ $selectedPost->id }})">Aceptar</button>
            </div>

        </x-slot>
    </x-modal>