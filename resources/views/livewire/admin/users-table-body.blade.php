<tbody>
    {{ $users }}

</tbody>


{{-- <tbody>
    @foreach ($users as $item)
        <tr class="p-3" wire:key="{{ $item->id }}">
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

                <button wire:click="delete({{ $item->id }})" class="btn fs-50 btn-danger">Eliminar
                </button>


            </td>
        </tr>
    @endforeach

</tbody> --}}
