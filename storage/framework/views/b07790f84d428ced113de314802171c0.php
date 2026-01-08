<?php $__env->startSection('content'); ?>
    <style>
        @media(max-width:700px) {
            .usersTable {
                font-size: 0.65em;

            }


        }
    </style>
    <h1 class="ms-5 fw-bold">Control de Publicaciones</h1>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.posts-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-3390197027-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>



    <script type="module" src="<?php echo e(asset('js/Admin/Alerts.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Admin/PostsIndex.blade.php ENDPATH**/ ?>