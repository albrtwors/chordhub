<?php $__env->startSection("content"); ?>
<h1 class="ms-5"><?php echo e($list->name); ?></h1>

<ul class="list-group m-5">
   <?php $__currentLoopData = $list_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <a href="<?php echo e(route('chord_view', $song->id)); ?>"><li class="list-group-item"><?php echo e($song->name); ?></li></a>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/List/list.blade.php ENDPATH**/ ?>