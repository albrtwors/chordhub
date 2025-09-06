<div>
    <a class="text-decoration-none" wire:click="edit({{ $item }})">
        <button class="btn fs-50 btn-primary cargar-info">
            Añadir Roles
        </button>
    </a>
    <div>
        <x-modal state="{{ $open_state }}">
            <x-slot name="head">
                <h3 class="fw-bold">Modificar Roles</h3>

            </x-slot>
            <x-slot name="content">


                <span>Nombre del usuario</span>
                <input wire:model.live="user.name" type="text" class="form-control">
                <div class="text-center">

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <h3 class="fw-bold">Roles</h3>

                            <div class="d-flex flex-column justify-content-center">
                                @foreach ($roles as $index => $role)
                                    <div>
                                        <span class="fw-bold">
                                            {{ $role->name }}:
                                        </span>

                                        <span>
                                            <input value="{{ $role->name }}"
                                                {{ $user->hasRole($role->name) ? 'checked' : '' }}
                                                wire:model.live="selectedRoles.{{ $index }}" type="checkbox">
                                        </span>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-6">
                            <h3 class="fw-bold">Permisos</h3>
                            <div class="d-flex flex-column justify-content-center">
                                @foreach ($permissions as $index => $permission)
                                    <div>

                                        <span class="fw-bold">
                                            {{ $permission->name }}:
                                        </span>

                                        <span>
                                            <input value="{{ $permission->name }}"
                                                {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                wire:model.live="selectedPermissions.{{ $index }}"
                                                type="checkbox">
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
                    <button wire:click="update()" type="submit" class="btn btn-primary">
                        Actualizar Usuario
                    </button>
                </div>

            </x-slot>
        </x-modal>

    </div>



</div>
