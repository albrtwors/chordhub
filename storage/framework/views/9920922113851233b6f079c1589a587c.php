<?php $__env->startSection('content'); ?>
    <h1 class="fw-bold ms-5 py-3">
        Cancioneros
    </h1>
    <h3 class="ms-5 pb-3">
        Aquí encontrarás todos los cancioneros disponibles
    </h3>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('File.files', ['type' => 'show']);

$__html = app('livewire')->mount($__name, $__params, 'lw-4104800895-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>







    <script type="module" src="<?php echo e(asset('js/Search/SearchList.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/List/lists.blade.php ENDPATH**/ ?>