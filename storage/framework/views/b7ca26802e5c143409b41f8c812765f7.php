<?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if (isset($component)) { $__componentOriginalcdf4a435c6880c573e5345e739ea29eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdf4a435c6880c573e5345e739ea29eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comments.item','data' => ['route' => $route,'postype' => $postype,'postid' => $postid,'itemxd' => $li]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($route),'postype' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postype),'postid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postid),'itemxd' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($li)]); ?>
         <?php $__env->slot('attrs', null, []); ?> 
            <?php echo e($attributes); ?>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdf4a435c6880c573e5345e739ea29eb)): ?>
<?php $attributes = $__attributesOriginalcdf4a435c6880c573e5345e739ea29eb; ?>
<?php unset($__attributesOriginalcdf4a435c6880c573e5345e739ea29eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdf4a435c6880c573e5345e739ea29eb)): ?>
<?php $component = $__componentOriginalcdf4a435c6880c573e5345e739ea29eb; ?>
<?php unset($__componentOriginalcdf4a435c6880c573e5345e739ea29eb); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php endif; ?>
<?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/components/comments/comments.blade.php ENDPATH**/ ?>