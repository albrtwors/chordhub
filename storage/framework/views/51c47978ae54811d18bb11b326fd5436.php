<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['maxSize']));

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

foreach (array_filter((['maxSize']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div class="col-xl-<?php echo e($maxSize); ?> mt-xl-3 mt-3 mt-md-3 mt mt-sm-3 col-md-6 col-sm-12">
    <div class="rounded p-3 shadow-sm">
        <?php echo $slot; ?>

    </div>
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/dashboard/square-chart-container.blade.php ENDPATH**/ ?>