<?php $__env->startSection('content'); ?>
    <h1 class="ms-5 fw-bold">Editar Acordes</h1>
    <h3 class="ms-5">Elige la canción a editar</h3>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('chord.chords');

$__html = app('livewire')->mount($__name, $__params, 'lw-1597029278-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    
    <script type="module" src="<?php echo e(asset('js/Search/SearchSong.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/modules/Chord/songs.blade.php ENDPATH**/ ?>