<div>

    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <!--[if BLOCK]><![endif]--><?php if($type == 'create'): ?>
            <?php elseif($type == 'edit'): ?>
                <select wire:model.live="collabVersions" class="form-control">
                    <option value="<?php echo e(false); ?>">Todas las versiones</option>
                    <option value="<?php echo e(true); ?>">Solo versiones colaborativas</option>
                </select>
            <?php elseif($type == 'delete'): ?>
            <?php else: ?>
                <select wire:model.live="ownVersions" class="form-control">
                    <option value="<?php echo e(false); ?>">Todas las Versiones</option>
                    <option value="<?php echo e(true); ?>">Tus Versiones</option>
                </select>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="chordName" placeholder="Busca una Canción" type="text" class="form-control">

        </div>

    </div>

    <div class="d-flex justify-content-center mt-2">
        <?php echo e($chords->links()); ?>

    </div>
    <div class="row ms-5 me-3 justify-content-center">

        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $chords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                <div class="d-flex">

                    <div>
                        <img width="100px" height="100px"
                            src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                            alt="">

                    </div>
                    <div class="ms-3">
                        <!--[if BLOCK]><![endif]--><?php if($type == 'edit'): ?>
                            <a class="link-dark" href="<?php echo e(route('acordes.edit', $chord->id)); ?>">
                                <h4><?php echo e($chord->name); ?></h4>
                                <p><?php echo e($chord->user->name); ?></p>

                            </a>
                        <?php elseif($type == 'delete'): ?>
                            <div>
                                <h4><?php echo e($chord->name); ?></h4>
                                <p><?php echo e($chord->user->name); ?></p>
                                <button wire:click="deleteModal(<?php echo e($chord->id); ?>)" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </div>
                        <?php elseif($type == 'show'): ?>
                            <a class="link-dark" href="<?php echo e(route('acordes.show', $chord->id)); ?>">
                                <h4><?php echo e($chord->name); ?></h4>
                                <p><?php echo e($chord->user->name); ?></p>
                            </a>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </div>

                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h2 class="m-5">
                No hay ninguna versión disponible
            </h2>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </div>


    <?php if (isset($component)) { $__componentOriginale6a555649da86b3de44465cdfe004aa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6a555649da86b3de44465cdfe004aa4 = $attributes; } ?>
<?php $component = App\View\Components\Modal::resolve(['state' => ''.e($open).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">
                Eliminar Acordes
            </h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h3 class="fw-bold">Estás seguro de que quieres eliminar la version <?php echo e($selectedChord->name); ?></h3>
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('open', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="delete()" class="btn btn-danger">Eliminar</button>
            </div>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $attributes = $__attributesOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__attributesOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $component = $__componentOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__componentOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>

    <script type="module" src="<?php echo e(asset('js\Admin\Alerts.js')); ?>"></script>
</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/chord/chord-versions.blade.php ENDPATH**/ ?>