<div class="ms-3">
    <div class="d-flex flex-xl-row flex-md-column flex-sm-column flex-column">
        <div class="col-2">
            <img src="<?php echo e($comment->user->image->url ?? 'https://i.pinimg.com/originals/13/d4/67/13d4670b367d0413b0d97affc2286c4c.jpg'); ?>"
                width="100px" height="100px" alt="">
        </div>
        <div class="col-6">
            <h3 class="fw-bold"><?php echo e($comment->user->name); ?></h3>
            <p><?php echo e($comment->comment); ?></p>
        </div>

    </div>


    <button class="btn btn-primary my-3 me-3" data-toggle="collapse" data-target="#answer-<?php echo e($comment->id); ?>">
        Responder
    </button>
    <!--[if BLOCK]><![endif]--><?php if($comment->responses->count() > 0): ?>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#answers-<?php echo e($comment->id); ?>">
            Mostrar respuestas (<?php echo e($comment->responses->count()); ?>)
        </button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <div id="answer-<?php echo e($comment->id); ?>" class="collapse">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appcomments.form', ['postId' => $comment->id, 'type' => $type, 'parentId' => $comment->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3431886570-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

    <!--[if BLOCK]><![endif]--><?php if(isset($comment->responses)): ?>
        <div id="answers-<?php echo e($comment->id); ?>" class="collapse">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appcomments.comments', ['postId' => $postId, 'type' => $type, 'route' => $route, 'hasResponses' => true, 'parentId' => $comment->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3431886570-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/appcomments/item.blade.php ENDPATH**/ ?>