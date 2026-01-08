

 <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['route', 'text', 'bgColor', 'icon']));

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

foreach (array_filter((['route', 'text', 'bgColor', 'icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<a class="col-xl-4 mt-xl-0 mt-md-3 mt-sm-3 mt-3 col-md-6 col-sm-12 col-12 align-items-center" href="<?php echo e($route); ?>">
   
    <?php
        switch($bgColor){
            case 'primary':
                $bcol = 'bg-primary-subtle text-primary';
                break;
            case 'danger';
                $bcol = 'bg-danger-subtle text-danger';
                break;
            case 'success';
                $bcol = 'bg-success-subtle text-success';
                break;
            default:
                $bcol='bg-primary-subtle text-primary';
        }

    ?>
    <div class="d-flex shadow-sm justify-content-center gap-3 fw-bold  rounded <?php echo e($bcol); ?> p-3 ">

            <?php echo e($text); ?>

        <i class="fas fs-5 fa-<?php echo e($icon); ?>"></i>


    </div>
</a><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/components/dashboard/process-card.blade.php ENDPATH**/ ?>