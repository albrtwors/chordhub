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
        <?php if (isset($component)) { $__componentOriginalb45eade6f129d8af6681551d4d1caef6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb45eade6f129d8af6681551d4d1caef6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comments.form','data' => ['parentid' => $itemxd->id,'postype' => $postype,'postid' => $postid,'route' => $route]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['parentid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($itemxd->id),'postype' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postype),'postid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postid),'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($route)]); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb45eade6f129d8af6681551d4d1caef6)): ?>
<?php $attributes = $__attributesOriginalb45eade6f129d8af6681551d4d1caef6; ?>
<?php unset($__attributesOriginalb45eade6f129d8af6681551d4d1caef6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb45eade6f129d8af6681551d4d1caef6)): ?>
<?php $component = $__componentOriginalb45eade6f129d8af6681551d4d1caef6; ?>
<?php unset($__componentOriginalb45eade6f129d8af6681551d4d1caef6); ?>
<?php endif; ?>
    </div>
    <?php if(isset($itemxd->responses)): ?>
        <?php if (isset($component)) { $__componentOriginal4500902f4707e8655b9d4f8cb39dda23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4500902f4707e8655b9d4f8cb39dda23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comments.comments','data' => ['id' => 'answers-'.e($itemxd->id).'','class' => 'collapse ms-5','route' => $route,'postype' => $postype,'postid' => $postid,'list' => $itemxd->responses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'answers-'.e($itemxd->id).'','class' => 'collapse ms-5','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($route),'postype' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postype),'postid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postid),'list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($itemxd->responses)]); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4500902f4707e8655b9d4f8cb39dda23)): ?>
<?php $attributes = $__attributesOriginal4500902f4707e8655b9d4f8cb39dda23; ?>
<?php unset($__attributesOriginal4500902f4707e8655b9d4f8cb39dda23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4500902f4707e8655b9d4f8cb39dda23)): ?>
<?php $component = $__componentOriginal4500902f4707e8655b9d4f8cb39dda23; ?>
<?php unset($__componentOriginal4500902f4707e8655b9d4f8cb39dda23); ?>
<?php endif; ?>
    <?php endif; ?>



</div>
<?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/components/comments/item.blade.php ENDPATH**/ ?>