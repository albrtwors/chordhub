<?php if($type == 'user'): ?>
    <div class="wrap-input100 validate-input">
        <input required <?php echo e($attributes); ?> class="input100">

        <span class="focus-input100" data-placeholder="<?php echo e($placeholder); ?>"></span>
    </div>
<?php elseif($type == 'email'): ?>
    <div class="wrap-input100 validate-input">
        <input required type="email" <?php echo e($attributes); ?> class="input100">

        <span class="focus-input100" data-placeholder="<?php echo e($placeholder); ?>"></span>
    </div>
<?php elseif($type == 'number'): ?>
    <div class="wrap-input100 validate-input">
        <input class="input100" <?php echo e($attributes); ?> type="number">

        <span class="focus-input100" data-placeholder="<?php echo e($placeholder); ?>"></span>
    </div>
<?php else: ?>
    <div class="wrap-input100 validate-input">
        <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
        </span>
        <input type="password" <?php echo e($attributes); ?>>
        <span class="focus-input100" data-placeholder="<?php echo e($placeholder); ?>"></span>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/forms/auth-forms.blade.php ENDPATH**/ ?>