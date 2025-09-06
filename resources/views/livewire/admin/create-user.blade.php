<div>
    {{-- @livewire('button', ['color' => 'primary', 'text' => 'Crear usuario']) --}}
    <div>

        <x-admin.modal>
            <x-slot name="name"></x-slot>
            <x-slot name="email"></x-slot>
            <x-slot name="password"></x-slot>
        </x-admin.modal>
    </div>
</div>
