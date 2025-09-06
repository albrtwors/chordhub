<div>
    <button wire:click="$set('createModal', true)" class="btn btn-primary ms-5">Crear Género</button>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="name" placeholder="Busca un género" type="text" class="form-control">


        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $genres->links() }}
    </div>
    <div class="d-flex justify-content-center mt-3">

        <table class=" m-md-1 m-1 m-sm-1 col-xl-6 col-md-10 col-sm-10 col-10 usersTable ">
            <thead>
                <tr>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id
                        @if ($order == 'id')
                            @if ($sort == 'desc')
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
                            @if ($sort == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th class="bg-primary p-2 text-white">
                        Acciones

                    </th>

                </tr>
            </thead>


            <tbody>
                @foreach ($genres as $gen)
                    <tr>
                        <td>{{ $gen->id }}</td>
                        <td>{{ $gen->name }}</td>



                        <td class="d-flex justify-content-center gap-3">
                            <a class="text-decoration-none">
                                <button wire:click="updateHandler({{ $gen->id }})"
                                    class="btn fs-50 btn-primary cargar-info">
                                    Modificar
                                </button>
                            </a>

                            <button wire:click="deleteHandler({{ $gen->id }})"
                                class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>



    <x-modal state="{{ $createModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Crear Género</h3>
        </x-slot>
        <x-slot name="content">
            <div class="d-flex flex-column justify-content-center">
                <h5 class="fw-bold">Nombre</h5>
                <input wire:model.live="genreName" type="text" class="form-control">
            </div>
        </x-slot>



        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('createModal', false)" class="btn btn-danger">Cerrar</button>
                <button wire:click="createGenre" class="btn btn-primary">Crear</button>
            </div>
        </x-slot>
    </x-modal>




    <x-modal state="{{ $deleteModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Borrar Género</h3>
        </x-slot>
        <x-slot name="content">
            <div class="d-flex flex-column justify-content-center">
                <h3>Estás seguro de que quieres eliminar {{ $selectedGenre->name }}</h3>
            </div>
        </x-slot>



        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('deleteModal', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="deleteGenre()" class="btn btn-danger">Aceptar</button>
            </div>
        </x-slot>
    </x-modal>




    <x-modal state="{{ $updateModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Actualizar {{ $selectedGenre->name }}</h3>
        </x-slot>
        <x-slot name="content">
            <div class="d-flex flex-column justify-content-center">
                <h5 class="fw-bold">Nombre</h5>
                <input wire:model.live="genreName" type="text" class="form-control">
            </div>
        </x-slot>



        <x-slot name="footer">
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('updateModal', false)" class="btn btn-danger">Cerrar</button>
                <button wire:click="updateGenre" class="btn btn-primary">Actualizar</button>
            </div>
        </x-slot>
    </x-modal>

    <script type="module" src="{{ asset('js/Admin/Alerts.js') }}"></script>
</div>
