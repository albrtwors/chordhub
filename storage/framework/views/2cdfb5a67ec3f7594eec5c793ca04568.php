<div>


    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div wire:key="comentario-nro-<?php echo e($comment->id); ?>" class="ms-5">
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
            <button class="btn btn-primary my-3" data-toggle="collapse" data-target="#answer-<?php echo e($comment->id); ?>">
                Responder
            </button>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments.form', ['postId' => $comment->commentable_id, 'posType' => $comment->commentable_type, 'parentId' => $comment->id, 'isFirstComment' => false, 'commentId' => $comment->id]);

$__html = app('livewire')->mount($__name, $__params, $comment->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!--[if BLOCK]><![endif]--><?php if(isset($comment->responses)): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments.comment-section', ['postid' => $comment->commentable_id, 'postype' => 'App\Models\Chord', 'parentid' => $comment->id, 'comments' => $comment->responses, 'isResponse' => true]);

$__html = app('livewire')->mount($__name, $__params, $comment->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->






</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/comments/comment-section.blade.php ENDPATH**/ ?>