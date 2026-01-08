<?php if(isset($checkbox)): ?>
    <input type="checkbox" <?php echo e($attributes); ?>>
<?php else: ?>
    <input <?php echo e($attributes->class(['form-control'])); ?>>
<?php endif; ?>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/components/forms/input.blade.php ENDPATH**/ ?>