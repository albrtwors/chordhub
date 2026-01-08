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
    <div class="mx-5 d-flex gap-3" style="overflow-x:scroll">
        
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Paginación</label>
                <select wire:model.live="quantity" class="form-control">
                    
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Comentario</label>
                <input wire:model.live="name" placeholder="Me encanta esta canción...." type="text" class="form-control">
            </div>

            




    </div>
    <div class="d-flex justify-content-center mt-3">
        <?php echo e($comments->links()); ?>

    </div>
    <div class="mx-3" style="min-width:full; overflow-x:scroll" >

        <table class="container-fluid ">
            <thead>
                <tr>
                    <th wire:click="sorting('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white
                        ">
                        Id

                        <!--[if BLOCK]><![endif]--><?php if($order == 'id'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($sort == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </th>
                    <th wire:click="sorting('comment')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Comentario

                        <!--[if BLOCK]><![endif]--><?php if($order == 'comment'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($sort == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                    <th wire:click="sorting('commentable_type')"style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Tipo

                        <!--[if BLOCK]><![endif]--><?php if($order == 'commentable_type'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($sort == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="<?php echo e($index%2==0?'bg-primary-subtle':'bg-white'); ?>">
                        <td><?php echo e($comment->id); ?></td>
                        <td wire:click="showFullText(<?php echo e($comment); ?>)" style="cursor:pointer" class="commentRow">
                            <?php echo e($comment->comment); ?></td>
                        <td>
                            <!--[if BLOCK]><![endif]--><?php if($comment->commentable_type == 'App\Models\Song'): ?>
                                Canción
                            <?php elseif($comment->commentable_type == 'App\Models\FIle'): ?>
                                Cancionero
                            <?php else: ?>
                                Acordes
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td>
                            <!--[if BLOCK]><![endif]--><?php if($comment->commentable): ?>
                                <?php echo e($comment->commentable->name); ?>

                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td><?php echo e($comment->user->name); ?></td>


                        <td class="d-flex justify-content-center gap-3">

                            <button wire:click="showDeleteModal(<?php echo e($comment); ?>)"
                                class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>

    </div>

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($commentModal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($commentModal).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Comentario de <?php echo e($user->name); ?></h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4><?php echo e($selectedComment['comment']); ?></b></h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('commentModal', false)">Cerrar</button>

            </div>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($deleteModal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($deleteModal).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Comentario de <?php echo e($user->name); ?></h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4>Seguro de que lo quieres eliminar?</b></h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-primary" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button class="btn btn-danger" wire:click="deleteComment()">Eliminar</button>
            </div>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/admin/comments-table.blade.php ENDPATH**/ ?>