<div>

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
        
    </div>
    <div class="d-flex justify-content-center mt-3">

        <table class=" m-md-1 m-1 m-sm-1 col-xl-6 col-md-10 col-sm-10 col-10 usersTable ">
            <thead>
                <tr>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id

                    </th>
                    <th wire:click="sorting('name')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Comentario

                        

                    </th>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Tipo

                    </th>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Nombre

                    </th>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Usuario

                    </th>
                    <th class="bg-primary p-2 text-white">
                        Acciones

                    </th>

                </tr>
            </thead>


            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comment->id); ?></td>
                        <td><?php echo e($comment->comment); ?></td>
                        <td>
                            <!--[if BLOCK]><![endif]--><?php if( $comment->commentable_type == 'App\Models\Song'): ?>
                                Canción
                            <?php elseif( $comment->commentable_type == 'App\Models\FIle'): ?>
                                Cancionero
                            <?php else: ?>
                                Acordes
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td><!--[if BLOCK]><![endif]--><?php if($comment->commentable): ?> 
                        
                               <?php echo e($comment->commentable->name); ?>

                            <?php endif; ?><!--[if ENDBLOCK]><![endif]--></td>
                        <td><?php echo e($comment->user->name); ?></td>


                        <td class="d-flex justify-content-center gap-3">
      
                            <button 
                                class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>

    </div>
</div>
<?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/livewire/admin/comments-table.blade.php ENDPATH**/ ?>