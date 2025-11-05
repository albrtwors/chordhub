<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal708114a696c97dee2a3fa6398d8005e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal708114a696c97dee2a3fa6398d8005e2 = $attributes; } ?>
<?php $component = App\View\Components\React\ViteRefresh::resolve(['path' => 'resources/react/comments/entry.jsx'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\React\ViteRefresh::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal708114a696c97dee2a3fa6398d8005e2)): ?>
<?php $attributes = $__attributesOriginal708114a696c97dee2a3fa6398d8005e2; ?>
<?php unset($__attributesOriginal708114a696c97dee2a3fa6398d8005e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal708114a696c97dee2a3fa6398d8005e2)): ?>
<?php $component = $__componentOriginal708114a696c97dee2a3fa6398d8005e2; ?>
<?php unset($__componentOriginal708114a696c97dee2a3fa6398d8005e2); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal1334642c7f94c16deb2c06f626f62ec8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8 = $attributes; } ?>
<?php $component = App\View\Components\App\PageHeader::resolve(['text' => ''.e($list->name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $attributes = $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $component = $__componentOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>

    <div class="d-flex justify-content-center gap-3 my-3">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
            <?php if(
                $list->user_id == Auth::user()->id ||
                    $list->collab ||
                    Auth::user()->hasRole('admin') ||
                    Auth::user()->hasRole('owner')): ?>
                <?php if (isset($component)) { $__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2 = $attributes; } ?>
<?php $component = App\View\Components\App\Link::resolve(['route' => ''.e(route('cancioneros.edit', $list->id)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve(['color' => 'success','text' => 'Modificar'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2)): ?>
<?php $attributes = $__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2; ?>
<?php unset($__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2)): ?>
<?php $component = $__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2; ?>
<?php unset($__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
            <?php if($list->user_id == Auth::user()->id || Auth::user()->hasRole('admin') || Auth::user()->hasRole('owner')): ?>
                <form id="delform" action="<?php echo e(route('cancioneros.destroy', $list->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve(['color' => 'danger','submit' => true,'text' => 'Eliminar'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-id' => ''.e($list->id).'','type' => 'submit']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>

                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <ul class="list-group m-5">
        <?php $__currentLoopData = $list_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2 = $attributes; } ?>
<?php $component = App\View\Components\App\Link::resolve(['route' => '/cancionero/'.e($list->id).'/cancion/'.e($song->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <li class="list-group-item"><?php echo e($song->name); ?></li>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2)): ?>
<?php $attributes = $__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2; ?>
<?php unset($__attributesOriginal93c74d12a08a4597ce6c14fd78a1d7b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2)): ?>
<?php $component = $__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2; ?>
<?php unset($__componentOriginal93c74d12a08a4597ce6c14fd78a1d7b2); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php if (isset($component)) { $__componentOriginalace7f2cb82d8ef640273b4393096c375 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalace7f2cb82d8ef640273b4393096c375 = $attributes; } ?>
<?php $component = App\View\Components\Comments\CommentMeta::resolve(['id' => ''.e($list->id).'','type' => 'file'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comment-meta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\CommentMeta::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalace7f2cb82d8ef640273b4393096c375)): ?>
<?php $attributes = $__attributesOriginalace7f2cb82d8ef640273b4393096c375; ?>
<?php unset($__attributesOriginalace7f2cb82d8ef640273b4393096c375); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalace7f2cb82d8ef640273b4393096c375)): ?>
<?php $component = $__componentOriginalace7f2cb82d8ef640273b4393096c375; ?>
<?php unset($__componentOriginalace7f2cb82d8ef640273b4393096c375); ?>
<?php endif; ?>
    <div id="comment-widget"></div>


    <script type="module" src="<?php echo e(asset('js/List/SongListDelete.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/List/list.blade.php ENDPATH**/ ?>