<div class="flex mx-5 flex-column gap-3">
    
    <div class="flex gap-3">
        <button  wire:click="$set('view','logs')" class="btn <?php echo e($view =='logs'?'bg-primary-subtle text-primary':''); ?> ">
            Logs
        </button>
        <button wire:click="$set('view', 'db')" class="btn <?php echo e($view =='db'?'bg-primary-subtle text-primary':''); ?>">
            Respaldar Base de Datos
        </button>
    

    </div>
    <div class="p-1"></div>
    <div class="<?php echo e($view =='db' ? 'd-none' :''); ?>">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.logs-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-2258192276-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
    <!--[if BLOCK]><![endif]--><?php if($view=='logs'): ?>

    <?php else: ?>
        <h3 class="fw-bold mt-3">Respaldar Base de Datos</h3>
        <p>Haz click en el botón para hacer un respaldo de la base de datos</p>
        
        <button wire:click="restoreDB" class="btn btn-primary">Respaldar</button>
        
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


</div><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/config/menu.blade.php ENDPATH**/ ?>