<div>
    
    <div>

        <?php if (isset($component)) { $__componentOriginal38571672e67b3663bf97ab2044d0a086 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38571672e67b3663bf97ab2044d0a086 = $attributes; } ?>
<?php $component = App\View\Components\Admin\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Admin\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('name', null, []); ?>  <?php $__env->endSlot(); ?>
             <?php $__env->slot('email', null, []); ?>  <?php $__env->endSlot(); ?>
             <?php $__env->slot('password', null, []); ?>  <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38571672e67b3663bf97ab2044d0a086)): ?>
<?php $attributes = $__attributesOriginal38571672e67b3663bf97ab2044d0a086; ?>
<?php unset($__attributesOriginal38571672e67b3663bf97ab2044d0a086); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38571672e67b3663bf97ab2044d0a086)): ?>
<?php $component = $__componentOriginal38571672e67b3663bf97ab2044d0a086; ?>
<?php unset($__componentOriginal38571672e67b3663bf97ab2044d0a086); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/admin/create-user.blade.php ENDPATH**/ ?>