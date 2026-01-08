<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginald5a15c6dbb425adf25438466fa335ada = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5a15c6dbb425adf25438466fa335ada = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.react.vite-refresh','data' => ['path' => 'resources/react/comments/app.jsx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['path' => 'resources/react/comments/app.jsx']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $attributes = $__attributesOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__attributesOriginald5a15c6dbb425adf25438466fa335ada); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $component = $__componentOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__componentOriginald5a15c6dbb425adf25438466fa335ada); ?>
<?php endif; ?>
  
   
    <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => ''.e($list->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => ''.e($list->name).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $attributes = $__attributesOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__attributesOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $component = $__componentOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__componentOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>

    <div class="d-flex justify-content-center gap-3 my-3">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
            <?php if(
                $list->user_id == Auth::user()->id ||
                    $list->collab ||
                    Auth::user()->hasRole('admin') ||
                    Auth::user()->hasRole('owner')): ?>
                <?php if (isset($component)) { $__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.link','data' => ['route' => ''.e(route('cancioneros.edit', $list->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('cancioneros.edit', $list->id)).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.button','data' => ['color' => 'success','text' => 'Modificar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'success','text' => 'Modificar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $attributes = $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $component = $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38)): ?>
<?php $attributes = $__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38; ?>
<?php unset($__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38)): ?>
<?php $component = $__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38; ?>
<?php unset($__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
            <?php if($list->user_id == Auth::user()->id || Auth::user()->hasRole('admin') || Auth::user()->hasRole('owner')): ?>
                <form id="delform" action="<?php echo e(route('cancioneros.destroy', $list->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <?php if (isset($component)) { $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.button','data' => ['dataId' => ''.e($list->id).'','color' => 'danger','submit' => true,'type' => 'submit','text' => 'Eliminar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-id' => ''.e($list->id).'','color' => 'danger','submit' => true,'type' => 'submit','text' => 'Eliminar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $attributes = $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $component = $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>

                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <ul class="list-group m-5">
        <?php $__currentLoopData = $list_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.link','data' => ['route' => '/cancionero/'.e($list->id).'/cancion/'.e($song->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => '/cancionero/'.e($list->id).'/cancion/'.e($song->id).'']); ?>
                <li class="list-group-item"><?php echo e($song->name); ?></li>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38)): ?>
<?php $attributes = $__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38; ?>
<?php unset($__attributesOriginal12373e55c1dbc11a6b4cd35aec4dff38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38)): ?>
<?php $component = $__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38; ?>
<?php unset($__componentOriginal12373e55c1dbc11a6b4cd35aec4dff38); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php if (isset($component)) { $__componentOriginal489d95be388931adee106da957892e6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal489d95be388931adee106da957892e6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comments.comment-meta','data' => ['id' => ''.e($list->id).'','type' => 'file']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comment-meta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($list->id).'','type' => 'file']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal489d95be388931adee106da957892e6d)): ?>
<?php $attributes = $__attributesOriginal489d95be388931adee106da957892e6d; ?>
<?php unset($__attributesOriginal489d95be388931adee106da957892e6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal489d95be388931adee106da957892e6d)): ?>
<?php $component = $__componentOriginal489d95be388931adee106da957892e6d; ?>
<?php unset($__componentOriginal489d95be388931adee106da957892e6d); ?>
<?php endif; ?>
    <div id="comment-widget"></div>


    <script type="module" src="<?php echo e(asset('js/List/SongListDelete.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/List/list.blade.php ENDPATH**/ ?>