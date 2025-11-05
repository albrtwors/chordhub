<form id="adminUsersForm">

    @csrf
    <div class="m-5 text-center">

        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6 col-12 col-sm-12">
                <h3 class="fw-bold">Roles</h3>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                                    {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                    name="permissions[]" type="checkbox">
                            </span>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-5">
                    Actualizar Usuario
                </button>
            </div>



        </div>

    </div>


</form>
