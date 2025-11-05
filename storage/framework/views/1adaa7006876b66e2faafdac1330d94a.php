<div <?php echo e($attrs ?? 'ms-5'); ?>>
    <div class="d-flex flex-xl-row flex-md-column flex-sm-column flex-column">
        <div class="col-2">
            <img src="<?php echo e($itemxd->user->image->url ?? 'https://i.pinimg.com/originals/13/d4/67/13d4670b367d0413b0d97affc2286c4c.jpg'); ?>"
                width="100px" height="100px" alt="">
        </div>
        <div class="col-6">
            <h3 class="fw-bold"><?php echo e($itemxd->user->name); ?></h3>
            <p><?php echo e($itemxd->comment); ?></p>
        </div>

    </div>
    <button class="btn btn-primary my-3 me-3" data-toggle="collapse" data-target="#answer-<?php echo e($itemxd->id); ?>">
        Responder
    </button>
    <?php if($itemxd->responses->count() > 0): ?>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#answers-<?php echo e($itemxd->id); ?>">
            Mostrar respuestas (<?php echo e($itemxd->responses->count()); ?>)
        </button>
    <?php endif; ?>
    <div id="answer-<?php echo e($itemxd->id); ?>" class="collapse">
        <?php if (isset($component)) { $__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $attributes; } ?>
<?php $component = App\View\Components\Comments\Form::resolve(['parentid' => $itemxd->id,'postype' => $postype,'postid' => $postid,'route' => $route] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc)): ?>
<?php $attributes = $__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc; ?>
<?php unset($__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc)): ?>
<?php $component = $__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc; ?>
<?php unset($__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc); ?>
<?php endif; ?>
    </div>
    <?php if(isset($itemxd->responses)): ?>
        <?php if (isset($component)) { $__componentOriginal2c92387a09c02b28a7d3eedc666f8331 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331 = $attributes; } ?>
<?php $component = App\View\Components\Comments\Comments::resolve(['route' => $route,'postype' => $postype,'postid' => $postid,'list' => $itemxd->responses] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Comments::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'answers-'.e($itemxd->id).'','class' => 'collapse ms-5']); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c92387a09c02b28a7d3eedc666f8331)): ?>
<?php $attributes = $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331; ?>
<?php unset($__attributesOriginal2c92387a09c02b28a7d3eedc666f8331); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c92387a09c02b28a7d3eedc666f8331)): ?>
<?php $component = $__componentOriginal2c92387a09c02b28a7d3eedc666f8331; ?>
<?php unset($__componentOriginal2c92387a09c02b28a7d3eedc666f8331); ?>
<?php endif; ?>
    <?php endif; ?>



</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/comments/item.blade.php ENDPATH**/ ?>