<?php $__env->startSection('content'); ?>
    <h1 class="text-start sidebar-brand-text ms-5 py-3 fw-bold">
        Borrar canción
    </h1>
    <h3 class="text-start ms-5 pb-3  ">
        Elimina tus canciones
    </h3>


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('song.songs', ['type' => 'destroy']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2185580459-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>








    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/song/delete.blade.php ENDPATH**/ ?>