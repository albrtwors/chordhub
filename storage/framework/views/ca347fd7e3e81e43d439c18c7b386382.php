<div>
    <form wire:submit="save" id="Comment" method="post" class="form-group" action="<?php echo e($route); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <!--[if BLOCK]><![endif]--><?php if($parentId): ?>
            <input value="<?php echo e($parentId); ?>" name="parentid" type="hidden">
        <?php else: ?>
            <input value="" name="parentid" type="hidden">
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <input type="hidden" value="<?php echo e($postId); ?>" name="postid">
        <input type="hidden" value="<?php echo e($type); ?>" name="postype">
        <textarea wire:model="comment" class="form-control my-3 col-5" name="comment" id="" data-user-id="32"
            rows="5"></textarea>
        <input class="btn btn-primary" type="submit" value="Subir Respuesta">

    </form>

</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/appcomments/form.blade.php ENDPATH**/ ?>