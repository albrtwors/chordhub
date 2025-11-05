<?php $__env->startSection('content'); ?>
<h1 class="ms-5 fw-bold">Notificaciones</h1>
<div class="row m-5">

  <p class="dismiss text-right"><a id="dismiss-all" href="<?php echo e(route('notifications.read')); ?>">Marcar como Leídas</a></p>
  <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $not): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <?php if (isset($component)) { $__componentOriginal7f85481eacdca9045b5a6f4b01e043fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f85481eacdca9045b5a6f4b01e043fe = $attributes; } ?>
<?php $component = App\View\Components\NotificationBanner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notification-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NotificationBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($not->data['message']); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('route', null, []); ?> 
        <?php echo e(route('notification.readAsGet', $not->id)); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('id', null, []); ?> 
        <?php echo e($not->id); ?>

     <?php $__env->endSlot(); ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f85481eacdca9045b5a6f4b01e043fe)): ?>
<?php $attributes = $__attributesOriginal7f85481eacdca9045b5a6f4b01e043fe; ?>
<?php unset($__attributesOriginal7f85481eacdca9045b5a6f4b01e043fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f85481eacdca9045b5a6f4b01e043fe)): ?>
<?php $component = $__componentOriginal7f85481eacdca9045b5a6f4b01e043fe; ?>
<?php unset($__componentOriginal7f85481eacdca9045b5a6f4b01e043fe); ?>
<?php endif; ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <h6>No hay notificaciones</h6>
  <?php endif; ?>



  
  
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Notification/UserNotifications.blade.php ENDPATH**/ ?>