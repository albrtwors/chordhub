<div>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['date']));

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

foreach (array_filter((['date']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
    <!--[if BLOCK]><![endif]--><?php if(Carbon\Carbon::parse($date)->isPast()): ?>
        <div class="btn btn-primary-subtle bg-danger-subtle text-danger">
            Finalizado
        </div>
    <?php elseif(Carbon\Carbon::parse($date)->isToday()): ?>
        <div class="btn btn-primary-subtle bg-success-subtle text-success">
            Hoy
        </div>                
    <?php else: ?>
        <div class="btn btn-primary-subtle bg-primary-subtle text-primary">
            Por Realizar
        </div>               
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/dates/date-state-helper.blade.php ENDPATH**/ ?>