<div>

    <br>

    <div style="overflow-x:scroll" class="mx-5 d-flex gap-3 ">

        
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
                <x-normal-input />
            </div>
            
       

    </div>
   
    <div class="d-flex justify-content-center gap-5 mt-3">
        {{ count($users) > 0 ? $users->links(data: ['scrollTo' => false]) : '' }}

    </div>
     <div class="mx-3" style="min-width: full; overflow-x:scroll">
    
        <table class="container-fluid">
            <thead>
                <tr>
                    <th wire:click='sorting("id")' style="cursor:pointer"
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
                    <th wire:click="sorting('name')" style="cursor:pointer"
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
                    <th wire:click="sorting('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Correo
                        @if ($order == 'email')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th class="bg-primary p-2 text-white">Estado</th>

                    <th class="bg-primary p-2 text-white">Opciones</th>
                </tr>
            </thead>


    </div>
    @foreach ($users as $index => $item)
        <tr class="p-3 {{ $index%2==0?'bg-primary-subtle':'bg-white' }}" wire:key="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>

                {{ $item->name }}
            </td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->active }}</td>

            <td>
                <a class="text-decoration-none" href="{{ route('admin.users.edit', $item->id) }}">
                    <button class="btn fs-50 btn-primary cargar-info">
                        Añadir Roles
                    </button>
                </a>

                @if($item->active == 1)
                <button wire:click="disable({{ $item->id }})" class="btn fs-50 btn-warning">Desactivar
                </button>
                @else
                <button wire:click="active({{ $item->id }})" class="btn fs-50 btn-success">Activar
                </button>
                @endif

            </td>
        </tr>
    @endforeach
    {{-- <livewire:admin.users-table-body :users="$users->pluck('id', 'name', 'email', 'active')->toArray()" />
 --}}


    </table>

</div>

{{-- @if (!$isLoaded)
@endif --}}








<x-modal state="{{ $delete_modal }}">
    <x-slot name="head">
        <h3 class="fw-bold">Desactivar usuario</h3>

    </x-slot>
    <x-slot name="content">
        <h4>Estás seguro de que quieres desactivar a <b>{{ $userToDelete->name }}</b></h4>
    </x-slot>

    <x-slot name="footer">

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-danger" wire:click="$set('delete_modal', false)">Cerrar</button>
            <button class="btn btn-primary" wire:click="deleteFromDb">Aceptar</button>
        </div>

    </x-slot>
</x-modal>


<x-modal state="{{ $open_state }}">
    <x-slot name="head">
        <h3 class="fw-bold">Modificar Roles</h3>

    </x-slot>
    <x-slot name="content">


        <span>Nombre del usuario</span>
        <input wire:model.live='userName' disabled type="text" class="form-control">
        <div class="text-center">

            <div class="row justify-content-center">
                <div class="col-6">
                    <h3 class="fw-bold">Roles</h3>

                    <div class="d-flex flex-column justify-content-center">
                        @foreach ($roles as $index => $role)
                            <div wire:key="{{ $role->id }}">
                                <span class="fw-bold">
                                    {{ $role->name }}:
                                </span>

                                <span>
                                    <input value="{{ $role->id }}"
                                        {{ $user->hasRole($role->name) ? 'checked' : '' }} type="checkbox">
                                </span>

                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-6">
                    <h3 class="fw-bold">Permisos</h3>
                    <div class="d-flex flex-column justify-content-center">
                        @foreach ($allPermissions as $index => $permission)
                            @php
                                $hasPermission = collect($userPermissions)->contains('id', $permission->id);
                            @endphp
                            <div wire:key="{{ $permission->id }}" class="mb-2">
                                <span class="fw-bold">{{ $permission->name }}:</span>
                                <input type="checkbox" value="{{ $permission->id }}"
                                    wire:change="togglePermission({{ $permission->id }}, $event.target.checked)"
                                    @checked(in_array($permission->id, $userPermissions))>
                            </div>
                        @endforeach
                    </div>
                </div>






            </div>

        </div>








    </x-slot>
    <x-slot name="footer">

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-danger" wire:click="closeModal">Cerrar</button>

        </div>

    </x-slot>
</x-modal>

</div>



{{-- <div class="m-5 text-center">

    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Roles</h3>

            <div class="d-flex flex-column justify-content-center">
                @foreach ($roles as $role)
                    <div>
                        <span class="fw-bold">
                            {{ $role->name }}:
                        </span>

                        <span>
                            <input value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'checked' : '' }}
                                name="roles[]" type="checkbox">
                        </span>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Permisos</h3>
            <div class="d-flex flex-column justify-content-center">
                @foreach ($permissions as $permission)
                    <div>

                        <span class="fw-bold">
                            {{ $permission->name }}:
                        </span>

                        <span>
                            <input value="{{ $permission->name }}"
                                {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }} name="permissions[]"
                                type="checkbox">
                        </span>

                    </div>
                @endforeach
            </div>
        </div> --}}
