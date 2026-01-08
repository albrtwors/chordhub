
<label>
    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['role']));

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

foreach (array_filter((['role']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
    <?php
        if($role=='admin'){
            $formattedRole = 'administrador';
        }elseif($role=='musician'){
            $formattedRole = 'músico';
        }elseif($role=='singer'){
            $formattedRole="cantante";
        }elseif($role=="owner"){
            $formattedRole = "dueño";
        }
        else{
            $formattedRole="visitante";
        }
    ?>
    <span class="text-primary">
    <?php echo e($formattedRole); ?>

    </span>  
</label><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/components/utils/role-label.blade.php ENDPATH**/ ?>