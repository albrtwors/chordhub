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
    <div class="d-flex justify-content-center gap-5 mt-2">
        {{ $users->links() }}

    </div>
    <div class="d-flex flex-column align-items-center justify-items-start">
        <table class=" m-md-1 m-1 m-sm-1 col-xl-8 col-md-10 col-sm-10 col-10 usersTable ">
            <thead>
                <tr>
                    <th wire:click="order('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id
                        @if ($sort == 'id')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th wire:click="order('name')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Nombre
                        @if ($sort == 'name')
                            @if ($direction == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif


                    </th>
                    <th wire:click="order('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Correo
                        @if ($sort == 'email')
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
            <tbody>
                @foreach ($users as $item)
                    <tr wire:key="{{ $item->id }}">
                        <td>{{ $item->id }}</td>
                        <td>
                            @if (isset($item->image->url))
                                <img width="20px" class="rounded-circle" height="20px" class="mx-1"
                                    src="{{ $item->image->url }}"></img>
                            @endif
                            {{ $item->name }}
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->active }}</td>

                        <td>
                            <a class="text-decoration-none" wire:click="edit({{ $item->id }})">
                                <button class="btn fs-50 btn-primary cargar-info">
                                    Añadir Roles
                                </button>
                            </a>

                            <button wire:click="delete({{ $item->id }})" class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>











    </div>

    <x-modal state="{{ $delete_modal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Eliminar usuario</h3>

        </x-slot>
        <x-slot name="content">
            <h4>Estás seguro de que quieres eliminar a <b>{{ $userToDelete->name }}</b></h4>
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
            <input value={{ $user->name }} disabled type="text" class="form-control">
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
                                <div wire:key="{{ $permission->id }}" class="mb-2">
                                    <span class="fw-bold">{{ $permission->name }}:</span>
                                    <span>
                                        <input type="checkbox" value="{{ $permission->id }}"
                                            wire:change="togglePermission({{ $permission->id }}, $event.target.checked)"
                                            @checked($permissions[$permission->id] ?? false)>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>




                </div>

            </div>









        </x-slot>
        <x-slot name="footer">

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('open_state', false)">Cerrar</button>

            </div>

        </x-slot>
    </x-modal>

</div>

<script type="module" src="{{ asset('js\Admin\AdminUsersDelete.js') }}"></script>

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
