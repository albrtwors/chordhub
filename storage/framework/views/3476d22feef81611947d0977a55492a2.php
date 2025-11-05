<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appcomments.item', ['comment' => $comment, 'postId' => $postId, 'type' => $type, 'route' => $route]);

$__html = app('livewire')->mount($__name, $__params, 'lw-938653553-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/appcomments/comments.blade.php ENDPATH**/ ?>