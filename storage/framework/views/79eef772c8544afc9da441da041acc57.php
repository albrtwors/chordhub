    <div class="mb-4 col-xl-6 col-md-6 col-12 col-sm-12">
        <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['topSong', 'color', 'title', 'icon', 'route']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['topSong', 'color', 'title', 'icon', 'route']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
        <div class="card border-left-<?php echo e($color); ?> shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a
                            href="
                        <?php if($route): ?> <?php echo e($route); ?>

                        <?php else: ?>
                            'no hay entradas' <?php endif; ?> 
                        ">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <?php echo e($title); ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo e($topSong->name ?? 'No hay entradas'); ?></div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-<?php echo e($icon); ?> fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/dashboard/main-cards.blade.php ENDPATH**/ ?>