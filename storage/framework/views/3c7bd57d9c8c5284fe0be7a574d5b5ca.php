<?php $__env->startSection('content'); ?>
    <h1 class="text-start sidebar-brand-text ms-5 py-3 fw-bold">
        Modificar Canción
    </h1>
    <h3 class="text-start ms-5 pb-3 fs-xl-3  fs-md-4 fs-4 fs-sm-4">
        Modifica tus canciones
    </h3>


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('song.songs', ['type' => 'edit']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1121295129-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!-- Topbar Search -->
    

    <script type="module" src="<?php echo e(asset('js/Search/SearchSongModify.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Song/modify.blade.php ENDPATH**/ ?>