<div>



    <div class="d-flex flex-column align-items-center justify-items-start">

        <div class="d-flex justify-content-center gap-2">
            <select class="form-control w-25" wire:model.live="quantity">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <?php if (isset($component)) { $__componentOriginal3fa9f8b920c823d9a6232a72e88aadbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fa9f8b920c823d9a6232a72e88aadbf = $attributes; } ?>
<?php $component = App\View\Components\NormalInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('normal-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NormalInput::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fa9f8b920c823d9a6232a72e88aadbf)): ?>
<?php $attributes = $__attributesOriginal3fa9f8b920c823d9a6232a72e88aadbf; ?>
<?php unset($__attributesOriginal3fa9f8b920c823d9a6232a72e88aadbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fa9f8b920c823d9a6232a72e88aadbf)): ?>
<?php $component = $__componentOriginal3fa9f8b920c823d9a6232a72e88aadbf; ?>
<?php unset($__componentOriginal3fa9f8b920c823d9a6232a72e88aadbf); ?>
<?php endif; ?>
        </div>

    </div>
    <div class="d-flex justify-content-center gap-5 mt-2">
        <?php echo e($users->links()); ?>


    </div>
    <div class="d-flex flex-column align-items-center justify-items-start">
        <table class=" m-md-1 m-1 m-sm-1 col-xl-8 col-md-10 col-sm-10 col-10 usersTable ">
            <thead>
                <tr>
                    <th wire:click="order('id')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id
                        <!--[if BLOCK]><![endif]--><?php if($sort == 'id'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                    <th wire:click="order('name')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Nombre
                        <!--[if BLOCK]><![endif]--><?php if($sort == 'name'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                    </th>
                    <th wire:click="order('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Correo
                        <!--[if BLOCK]><![endif]--><?php if($sort == 'email'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                    <th class="bg-primary p-2 text-white">Estado</th>

                    <th class="bg-primary p-2 text-white">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr wire:key="<?php echo e($item->id); ?>">
                        <td><?php echo e($item->id); ?></td>
                        <td>
                            <!--[if BLOCK]><![endif]--><?php if(isset($item->image->url)): ?>
                                <img width="20px" class="rounded-circle" height="20px" class="mx-1"
                                    src="<?php echo e($item->image->url); ?>"></img>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <?php echo e($item->name); ?>

                        </td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->active); ?></td>

                        <td>
                            <a class="text-decoration-none" wire:click="edit(<?php echo e($item->id); ?>)">
                                <button class="btn fs-50 btn-primary cargar-info">
                                    Añadir Roles
                                </button>
                            </a>

                            <button wire:click="delete(<?php echo e($item->id); ?>)" class="btn fs-50 btn-danger">Eliminar
                            </button>


                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </tbody>
        </table>











    </div>

    <?php if (isset($component)) { $__componentOriginale6a555649da86b3de44465cdfe004aa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6a555649da86b3de44465cdfe004aa4 = $attributes; } ?>
<?php $component = App\View\Components\Modal::resolve(['state' => ''.e($delete_modal).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Eliminar usuario</h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4>Estás seguro de que quieres eliminar a <b><?php echo e($userToDelete->name); ?></b></h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('delete_modal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="deleteFromDb">Aceptar</button>
            </div>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $attributes = $__attributesOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__attributesOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $component = $__componentOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__componentOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginale6a555649da86b3de44465cdfe004aa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6a555649da86b3de44465cdfe004aa4 = $attributes; } ?>
<?php $component = App\View\Components\Modal::resolve(['state' => ''.e($open_state).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Modificar Roles</h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 


            <span>Nombre del usuario</span>
            <input value=<?php echo e($user->name); ?> disabled type="text" class="form-control">
            <div class="text-center">

                <div class="row justify-content-center">
                    <div class="col-6">
                        <h3 class="fw-bold">Roles</h3>

                        <div class="d-flex flex-column justify-content-center">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="<?php echo e($role->id); ?>">
                                    <span class="fw-bold">
                                        <?php echo e($role->name); ?>:
                                    </span>

                                    <span>
                                        <input value="<?php echo e($role->id); ?>"
                                            <?php echo e($user->hasRole($role->name) ? 'checked' : ''); ?> type="checkbox">
                                    </span>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>

                    <div class="col-6">
                        <h3 class="fw-bold">Permisos</h3>
                        <div class="d-flex flex-column justify-content-center">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $allPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div wire:key="<?php echo e($permission->id); ?>" class="mb-2">
                                    <span class="fw-bold"><?php echo e($permission->name); ?>:</span>
                                    <span>
                                        <input type="checkbox" value="<?php echo e($permission->id); ?>"
                                            wire:change="togglePermission(<?php echo e($permission->id); ?>, $event.target.checked)"
                                            <?php if($permissions[$permission->id] ?? false): echo 'checked'; endif; ?>>
                                    </span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>




                </div>

            </div>









         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('open_state', false)">Cerrar</button>

            </div>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $attributes = $__attributesOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__attributesOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $component = $__componentOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__componentOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>

</div>

<script type="module" src="<?php echo e(asset('js\Admin\AdminUsersDelete.js')); ?>"></script>


<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/admin/users-table.blade.php ENDPATH**/ ?>