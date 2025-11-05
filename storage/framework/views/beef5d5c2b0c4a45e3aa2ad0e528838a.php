<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <select wire:model.live="quantity" class="w-25 form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="name" placeholder="Busca un cancionero" type="text" class="form-control">


        </div>

    </div>

    <div class="d-flex justify-content-center mt-2">
        <?php echo e($lists->links()); ?>

    </div>

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div id="list_row" class="row">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div id="list_template" class="col-xl-3 col-sm-6 col-12 mt-3">




                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="fas fa-music fa-2x"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h6><?php echo e($li->date); ?></h6>
                                            <h5><?php echo e($li->name); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--><?php if($type == 'show'): ?>
                                <div class="d-flex justify-content-center my-3">
                                    <a href="<?php echo e(route('cancioneros.show', $li->id)); ?>"><button
                                            class="btn btn-primary">Ver</button></a>
                                </div>
                            <?php elseif($type == 'edit'): ?>
                                <div class="d-flex justify-content-center my-3">
                                    <a href="<?php echo e(route('cancioneros.edit', $li->id)); ?>"><button
                                            class=" btn btn-primary">Modificar</button></a>
                                </div>
                            <?php else: ?>
                                <div class="d-flex justify-content-center my-3">
                                    <button wire:click="showDelete(<?php echo e($li->id); ?>)"
                                        class=" btn btn-danger">Eliminar</button>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                    </div>

















                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="m-5">
                        <h6>No hay cancioneros</h6>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </section>

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
                Eliminar cancionero
            </h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h3 class="fw-bold">Estás seguro de que quieres eliminar <?php echo e($selectedFile->name); ?></h3>
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
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/file/files.blade.php ENDPATH**/ ?>