<button type="button" class="ms-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Crear usuario
</button>

<!-- Modal -->
<div class="modal fade" wire:ignore id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear un usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Correo Electrónico</h6>
                @error('name')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
                <input type="text" wire:model.defer="email" class="form-control" name="email" id="">
                <h6>Nombre de usuario</h6>
                @error('name')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
                <input type="text" wire:model.defer="name" class="form-control" name="name" id="">
                <h6>Contraseña</h6>

                <input type="text" wire:model.defer="password" class="form-control" name="password" id="">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button wire:click="save()" type="button" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
