<?php $__env->startSection('content'); ?>
    <h1 class="ms-5 fw-bold">
        Eliminar Acordes
    </h1>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('chord.chords', ['type' => 'delete']);

$__html = app('livewire')->mount($__name, $__params, 'lw-96664677-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/chord/destroyIndex.blade.php ENDPATH**/ ?>