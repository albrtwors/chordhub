<div>
    <button class="btn btn-primary ms-5" wire:click="$set('state', true)">Crear usuario</button>
    <x-modal state="{{ $state }}">
        <x-slot name="head">
            <h3 class="fw-bold">Crear usuario</h3>
        </x-slot>
        <x-slot name="content">
            <div wire:loading.class="d-block" wire:target="imagen" class="d-none alert alert-primary">
                Cargando imagen
            </div>
            @if ($imagen)
                <div wire:loading.hide wire:target="imagen" class="d-flex justify-content-center mb-3">
                    <img width="150px" height="150px" class="rounded-circle" src="{{ $imagen->temporaryUrl() }}"
                        alt="">
                </div>
            @endif
            <span>Nombre del usuario</span>
            <input wire:model.defer="name" type="text" name="name" class="form-control">
            <span>Email</span>
            <input wire:model.defer="email" type="text" name="email" class="form-control">
            <span>Contraseña</span>
            <input wire:model.defer="password" type="text" name="password" class="form-control">
            <span>Foto de perfil</span>
            <input wire:model.defer="imagen" type="file" name="imagen" id="{{ $random }}"
                class="form-control">
        </x-slot>
        <x-slot name="footer">
            <div class="btn btn-danger" wire:click="setState()">Cerrar</div>
            <div class="btn btn-primary" wire:loading.class="opacity-25" wire:loading.attr="disabled"
                wire:target="save, imagen" wire:click="save()">Crear</div>

        </x-slot>
    </x-modal>
</div>
