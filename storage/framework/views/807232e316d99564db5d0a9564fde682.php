<?php $__env->startSection("content"); ?>
<h1 class="fw-bold ms-5"><?php echo e($list->name); ?></h1>
<div class="d-flex justify-content-center gap-3 my-3">
   
    <a class="" href="<?php echo e(route('cancioneros.edit', $list->id)); ?>"><button class="btn btn-success">Modificar</button></a>
    <form id="delform" action="<?php echo e(route('cancioneros.destroy', $list->id)); ?>">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>  
     <button  data-id="<?php echo e($list->id); ?>" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<ul class="list-group m-5">
   <?php $__currentLoopData = $list_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <a href="<?php echo e(route('canciones.show', $song->id)); ?>"><li class="list-group-item"><?php echo e($song->name); ?></li></a>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<div class="m-5 p-5 border">
    <h3 class="fw-bold mb-5">Comentarios</h3>
    <?php if (isset($component)) { $__componentOriginal2c92387a09c02b28a7d3eedc666f8331 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331 = $attributes; } ?>
<?php $component = App\View\Components\Comments\Comments::resolve(['route' => ''.e(route('comments.store')).'','postype' => 'App\Models\File','postid' => $list->id,'list' => $comments] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Comments::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        
    <?php if (isset($component)) { $__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $attributes; } ?>
<?php $component = App\View\Components\Comments\Form::resolve(['parentid' => null,'postype' => 'App\Models\File','postid' => $list->id,'route' => ''.e(route('comments.store')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

<script type="module" src="<?php echo e(asset('js/List/SongListDelete.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/List/list.blade.php ENDPATH**/ ?>