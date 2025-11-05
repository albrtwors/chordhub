<?php if($submit): ?>
    <button type="submit" <?php echo e($attributes->class(["btn btn-$color"])); ?>>
        <?php echo e($text); ?>

    </button>
<?php else: ?>
    <button type="button" <?php echo e($attributes->class(["btn btn-$color"])); ?>>
        <?php echo e($text); ?>

    </button>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/forms/button.blade.php ENDPATH**/ ?>