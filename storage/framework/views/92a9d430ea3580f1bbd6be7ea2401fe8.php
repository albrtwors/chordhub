<div>
    <a class="text-decoration-none" wire:click="edit(<?php echo e($item); ?>)">
        <button class="btn fs-50 btn-primary cargar-info">
            Añadir Roles
        </button>
    </a>
    <div>
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
                <input wire:model.live="user.name" type="text" class="form-control">
                <div class="text-center">

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <h3 class="fw-bold">Roles</h3>

                            <div class="d-flex flex-column justify-content-center">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <span class="fw-bold">
                                            <?php echo e($role->name); ?>:
                                        </span>

                                        <span>
                                            <input value="<?php echo e($role->name); ?>"
                                                <?php echo e($user->hasRole($role->name) ? 'checked' : ''); ?>

                                                wire:model.live="selectedRoles.<?php echo e($index); ?>" type="checkbox">
                                        </span>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                        <div class="col-6">
                            <h3 class="fw-bold">Permisos</h3>
                            <div class="d-flex flex-column justify-content-center">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>

                                        <span class="fw-bold">
                                            <?php echo e($permission->name); ?>:
                                        </span>

                                        <span>
                                            <input value="<?php echo e($permission->name); ?>"
                                                <?php echo e($user->hasPermissionTo($permission->name) ? 'checked' : ''); ?>

                                                wire:model.live="selectedPermissions.<?php echo e($index); ?>"
                                                type="checkbox">
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
                    <button wire:click="update()" type="submit" class="btn btn-primary">
                        Actualizar Usuario
                    </button>
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



</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/admin/generic-modal.blade.php ENDPATH**/ ?>