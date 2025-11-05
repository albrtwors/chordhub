<div>
    <style>
        .commentRow {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .usersTable th,
        .usersTable td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="name" placeholder="Busca una canción" type="text" class="form-control">


        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $comments->links() }}
    </div>
    <div class="d-flex justify-content-center mt-3">

        <table class="container-fluid mx-5">
            <thead>
                <tr>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white
                        ">
                        Id

                        @if ($order == 'id')
                            @if ($sort == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif
                    </th>
                    <th wire:click="sorting('comment')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Comentario

                        @if ($order == 'comment')
                            @if ($sort == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif

                    </th>
                    <th wire:click="sorting('commentable_type')"style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Tipo

                        @if ($order == 'commentable_type')
                            @if ($sort == 'desc')
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            @else
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            @endif
                        @endif
                    </th>
                    <th style="cursor:pointer" class="cursor-pointer bg-primary p-2 text-white">
                        Nombre

                    </th>
                    <th style="cursor:pointer" class="cursor-pointer bg-primary p-2 text-white">
                        Usuario

                    </th>
                    <th class="bg-primary p-2 text-white">
                        Acciones

                    </th>

                </tr>
            </thead>


            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td wire:click="showFullText({{ $comment }})" style="cursor:pointer" class="commentRow">
                            {{ $comment->comment }}</td>
                        <td>
                            @if ($comment->commentable_type == 'App\Models\Song')
                                Canción
                            @elseif ($comment->commentable_type == 'App\Models\FIle')
                                Cancionero
                            @else
                                Acordes
                            @endif
                        </td>
                        <td>
                            @if ($comment->commentable)
                                {{ $comment->commentable->name }}
                            @endif
                        </td>
                        <td>{{ $comment->user->name }}</td>


                        <td class="d-flex justify-content-center gap-3">

                            <button wire:click="showDeleteModal({{ $comment }})"
                                class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <x-modal state="{{ $commentModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Comentario de {{ $user->name }}</h3>

        </x-slot>
        <x-slot name="content">
            <h4>{{ $selectedComment['comment'] }}</b></h4>
        </x-slot>

        <x-slot name="footer">

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('commentModal', false)">Cerrar</button>

            </div>

        </x-slot>
    </x-modal>


    <x-modal state="{{ $deleteModal }}">
        <x-slot name="head">
            <h3 class="fw-bold">Comentario de {{ $user->name }}</h3>

        </x-slot>
        <x-slot name="content">
            <h4>Seguro de que lo quieres eliminar?</b></h4>
        </x-slot>

        <x-slot name="footer">

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-primary" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button class="btn btn-danger" wire:click="deleteComment()">Eliminar</button>
            </div>

        </x-slot>
    </x-modal>
</div>
