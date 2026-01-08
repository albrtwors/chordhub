<?php $__env->startSection('content'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/react/pdf/entrylogs.jsx'); ?>
    <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => 'Configuración']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Configuración']); ?>
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

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('config.menu');

$__html = app('livewire')->mount($__name, $__params, 'lw-973337373-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    

    <script type="module" src="<?php echo e(asset('js/Admin/Alerts.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/settings/Index.blade.php ENDPATH**/ ?>