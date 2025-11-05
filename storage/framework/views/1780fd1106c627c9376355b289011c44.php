<?php $__env->startSection('content'); ?>
    <h1 class="ms-5 fw-bold py-3 ">
        Canciones
    </h1>
    <h3 class="ms-5 pb-3 ">
        Aquí encontrarás todas las canciones disponibles
    </h3>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('song.songs', ['type' => 'show']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3882780175-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>




    
    <script type="module" src="<?php echo e(asset('js/Search/SearchSong.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/modules/Song/songs.blade.php ENDPATH**/ ?>