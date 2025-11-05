<?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if (isset($component)) { $__componentOriginal32c074d16bee5cba108bd5879492f512 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32c074d16bee5cba108bd5879492f512 = $attributes; } ?>
<?php $component = App\View\Components\Comments\Item::resolve(['route' => $route,'postype' => $postype,'postid' => $postid,'itemxd' => $li] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Item::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('attrs', null, []); ?> 
            <?php echo e($attributes); ?>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32c074d16bee5cba108bd5879492f512)): ?>
<?php $attributes = $__attributesOriginal32c074d16bee5cba108bd5879492f512; ?>
<?php unset($__attributesOriginal32c074d16bee5cba108bd5879492f512); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32c074d16bee5cba108bd5879492f512)): ?>
<?php $component = $__componentOriginal32c074d16bee5cba108bd5879492f512; ?>
<?php unset($__componentOriginal32c074d16bee5cba108bd5879492f512); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/comments/comments.blade.php ENDPATH**/ ?>