<?php $__env->startSection('content'); ?>
    <h1 class="ms-5 fw-bold">Crear Acordes</h1>
    <h3 class="ms-5">Elige la canción a armonizar</h3>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('chord.chords', ['type' => 'create']);

$__html = app('livewire')->mount($__name, $__params, 'lw-1882728283-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <script type="module" src="<?php echo e(asset('js/Search/SearchSong.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/Chord/createIndex.blade.php ENDPATH**/ ?>