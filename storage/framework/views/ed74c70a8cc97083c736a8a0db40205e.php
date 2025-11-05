<?php if($checkbox): ?>
    <input type="checkbox" <?php echo e($attributes); ?>>
<?php else: ?>
    <input <?php echo e($attributes->class(['form-control'])); ?>>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/forms/input.blade.php ENDPATH**/ ?>