<form id="adminUsersForm">

    <?php echo csrf_field(); ?>
    <div class="m-5 text-center">

        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6 col-12 col-sm-12">
                <h3 class="fw-bold">Roles</h3>
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <div class="d-flex flex-column justify-content-center">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <span class="fw-bold">
                                <?php echo e($role->name); ?>:
                            </span>

                            <span>
                                <input value="<?php echo e($role->name); ?>" <?php echo e($user->hasRole($role->name) ? 'checked' : ''); ?>

                                    name="roles[]" type="checkbox">
                            </span>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 col-sm-12">
                <h3 class="fw-bold">Permisos</h3>
                <div class="d-flex flex-column justify-content-center">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>

                            <span class="fw-bold">
                                <?php echo e($permission->name); ?>:
                            </span>

                            <span>
                                <input value="<?php echo e($permission->name); ?>"
                                    <?php echo e($user->hasPermissionTo($permission->name) ? 'checked' : ''); ?>

                                    name="permissions[]" type="checkbox">
                            </span>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-5">
                    Actualizar Usuario
                </button>
            </div>



        </div>

    </div>


</form>
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/components/admin/roles.blade.php ENDPATH**/ ?>