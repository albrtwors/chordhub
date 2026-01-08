
<div class="file-card col-xl-3 col-md-6 col-sm-6 col-12 ">
    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['type','author', 'name', 'songs', 'id']));

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

foreach (array_filter((['type','author', 'name', 'songs', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

    <!--[if BLOCK]><![endif]--><?php if($type=="show"): ?>
        <a class="song-card-anchor"  href="<?php echo e(route('cancioneros.show', $id)); ?>">
            <div class="d-flex align-items-center flex-column gap-1">
                <div class="d-flex p-5" >
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if($index>=5){
                                break;
                            }

                        
                        ?>
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="<?php echo e($song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>">
                        </img>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <h4 class="fw-bold"><?php echo e($name); ?></h4>
                <h5 class="fw-bold"><?php echo e($author); ?></h5>
            </div>
        </a>
    <?php elseif($type=="edit"): ?>
         <a class="song-card-anchor"  href="<?php echo e(route('cancioneros.edit', $id)); ?>">
            <div class="d-flex align-items-center flex-column gap-1">
                <div class="d-flex p-5" >
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if($index>=5){
                                break;
                            }

                        
                        ?>
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="<?php echo e($song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>">
                        </img>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <h4 class="fw-bold"><?php echo e($name); ?></h4>
                <h5 class="fw-bold"><?php echo e($author); ?></h5>
            </div>
        </a>   
    <?php elseif($type=="destroy"): ?>

            <div class="d-flex align-items-center flex-column gap-1">
                <div class="w-100">
                    <i wire:click="showDelete(<?php echo e($id); ?>)" class="fas fa-trash bg-danger round-circle " style="border-radius:100%; background:red; padding:10px; color:white">

                    </i>
                </div>
                <div class="d-flex p-5" >
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if($index>=5){
                                break;
                            }

                        
                        ?>
                        <img style="border-radius:100%;width:100px;height:100px; margin:-30px" src="<?php echo e($song->image ? $song->image->url : 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>">
                        </img>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <h4 class="fw-bold"><?php echo e($name); ?></h4>
                <h5 class="fw-bold"><?php echo e($author); ?></h5>
            </div>
        
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


</div><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/file/file-card.blade.php ENDPATH**/ ?>