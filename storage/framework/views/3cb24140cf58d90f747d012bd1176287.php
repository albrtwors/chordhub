<?php $__env->startSection('content'); ?>
<h1 class="ms-5 fw-bold">Editar usuario</h1>

<div class="d-flex flex-row align-items-center gap-3 justify-content-center">
    <div>
        <h4 class="mx-auto fw-bold"><?php echo e($user->name); ?></h4>
    </div>
    <div>
        <img src="<?php echo e($user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'); ?>" width="100px" height="100px" alt="" class="rounded-circle">
    </div>
    
</div>

<form id="adminUsersForm" action="<?php echo e(route('admin.users.update', $user->id)); ?>">

<?php echo csrf_field(); ?>
<div class="m-5 text-center">

    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Roles</h3>
            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
            <div class="d-flex flex-column justify-content-center">
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <span class="fw-bold">
                        <?php echo e($role->name); ?>:
                    </span>

                    <span>
                        <input value="<?php echo e($role->name); ?>" <?php echo e($user->hasRole($role->name) ? 'checked' : ''); ?> name="roles[]" type="checkbox">
                    </span>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12 col-sm-12">
            <h3 class="fw-bold">Permisos</h3>
            <div class="d-flex flex-column justify-content-center">
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>

                    <span class="fw-bold">
                        <?php echo e($permission->name); ?>:
                    </span>

                    <span>
                        <input value="<?php echo e($permission->name); ?>" <?php echo e($user->hasPermissionTo($permission->name) ? 'checked' : ''); ?> name="permissions[]"
                            type="checkbox">
                    </span>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script type="module" src="<?php echo e(asset('js/Admin/AdminUsers.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Admin/usersEdit.blade.php ENDPATH**/ ?>