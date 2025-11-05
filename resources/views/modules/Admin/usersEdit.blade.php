@extends('layouts.app')
@section('content')
<h1 class="ms-5 fw-bold">Editar usuario</h1>

<div class="d-flex flex-row align-items-center gap-3 justify-content-center">
    <div>
        <h4 class="mx-auto fw-bold">{{$user->name}}</h4>
    </div>
    <div>
        <img src="{{$user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'}}" width="100px" height="100px" alt="" class="rounded-circle">
    </div>
    
</div>

<form id="adminUsersForm" action="{{route('admin.users.update', $user->id)}}">

@csrf
<div class="m-5 text-center">

    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Roles</h3>
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="d-flex flex-column justify-content-center">
                @foreach($roles as $role)
                <div>
                    <span class="fw-bold">
                        {{$role->name}}:
                    </span>

                    <span>
                        <input value="{{$role->name}}" {{ $user->hasRole($role->name) ? 'checked' : ''}} name="roles[]" type="checkbox">
                    </span>

                </div>

                @endforeach
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Permisos</h3>
            <div class="d-flex flex-column justify-content-center">
                @foreach($permissions as $permission)
                <div>

                    <span class="fw-bold">
                        {{$permission->name}}:
                    </span>

                    <span>
                        <input value="{{$permission->name}}" {{ $user->hasPermissionTo($permission->name) ? 'checked' : ''}} name="permissions[]"
                            type="checkbox">
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
<script type="module" src="{{asset('js/Admin/AdminUsers.js')}}"></script>
@endsection
