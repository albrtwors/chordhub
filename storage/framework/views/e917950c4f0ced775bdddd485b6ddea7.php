


<div id="song_template" class="col-xl-3 col-md-6 col-sm-12 mt-3 song-card">
  <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['author', 'name', 'image', 'type', 'id']));

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

foreach (array_filter((['author', 'name', 'image', 'type', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

  <!--[if BLOCK]><![endif]--><?php if($type=='show'): ?>
  <a class="song-card-anchor" href="<?php echo e(route('canciones.show', $id)); ?>">
    <div class="d-flex flex-column gap-3 align-items-center">
        <img src="<?php echo e($image); ?>" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                <?php echo e($name); ?>

            </h4>
            <h5 class="fw-bold">
                <?php echo e($author); ?>

            </h5>
        </div>

    </div>
 </a>
  <?php elseif($type=='edit'): ?>
  <a class="song-card-anchor" href="<?php echo e(route('canciones.edit', $id)); ?>">
    <div class="d-flex flex-column gap-3 align-items-center">
        <img src="<?php echo e($image); ?>" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                <?php echo e($name); ?>

            </h4>
            <h5 class="fw-bold">
                <?php echo e($author); ?>

            </h5>
        </div>

    </div>
</a>
  <?php elseif($type=="destroy"): ?>

    <div class="d-flex flex-column gap-3 align-items-center">
        <div class="w-100 d-flex justify-content-start">
            <i wire:click="showDelete(<?php echo e($id); ?>)" class="fas fa-trash bg-danger round-circle " style="border-radius:100%; background:red; padding:10px; color:white">

            </i>
        </div>

        <img src="<?php echo e($image); ?>" style="width:150px;height:150px;border-radius:30px" alt="">
        <div class="flex-column d-flex text-center align-items-center">
            <h4 class="fw-bold">
                <?php echo e($name); ?>

            </h4>
            <h5 class="fw-bold">
                <?php echo e($author); ?>

            </h5>

        </div>

    </div>

  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/components/song/song-card.blade.php ENDPATH**/ ?>