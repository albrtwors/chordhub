<form id="Comment" method="post" class="form-group" action="<?php echo e($route); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    <?php if($parentid): ?>
        <input value="<?php echo e($parentid); ?>" name="parentid" type="hidden">
    <?php else: ?>
        <input value="" name="parentid" type="hidden">
    <?php endif; ?>
    <input type="hidden" value="<?php echo e($postid); ?>" name="postid">
    <input type="hidden" value="<?php echo e($postype); ?>" name="postype">
    <textarea class="form-control my-3 col-5" name="comment" id="" data-user-id="32" rows="5"></textarea>
    <input class="btn btn-primary" type="submit" value="Subir Respuesta">

</form>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/comments/form.blade.php ENDPATH**/ ?>