<div>

    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <!--[if BLOCK]><![endif]--><?php if($type == 'show'): ?>
                <select wire:model.live="ownSongs" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones de todos</option>
                    <option value="<?php echo e(true); ?>">Solo canciones Propias</option>
                </select>
            <?php elseif($type == 'edit'): ?>
                <select wire:model.live="collabSongs" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones Propias</option>
                    <option value="<?php echo e(true); ?>">Canciones Colaborativas</option>
                </select>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <select wire:model.live="quantity" class="w-25 form-control">

                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">

            <select wire:model.live="genreId" class="w-25 form-control">
                <option value="<?php echo e(null); ?>">Todos</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        <?php echo e($songs->links()); ?>

    </div>


    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-3">
                    <div class="d-flex p-3 ">


                        <div>
                            <img width="100px" height="100px"
                                src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                alt="">

                        </div>
                        <div class="ms-3 d-flex flex-column flex-fill">



                            <h4 class="mt-1"><?php echo e($song->name); ?></h4>
                            <p><?php echo e($song->author->name); ?></p>

                            <!--[if BLOCK]><![endif]--><?php if($type == 'edit'): ?>
                                <a href="<?php echo e(route('canciones.edit', $song->id)); ?>"><button
                                        class="btn btn-success">Modificar</button></a>
                            <?php elseif($type == 'show'): ?>
                                <a href="<?php echo e(route('canciones.show', $song->id)); ?>"><button
                                        class="btn btn-primary">Ver</button></a>
                            <?php elseif($type == 'destroy'): ?>
                                <a><button type="button" wire:click="showDelete(<?php echo e($song->id); ?>)"
                                        data-id="<?php echo e($song->id); ?>" class="btn btn-danger">Eliminar</button></a>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div>
                    No hay canciones subidas
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>


    </div>


    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($open).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($open).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">
                Eliminar Canción
            </h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h3 class="fw-bold">Estás seguro de que quieres eliminar <?php echo e($selectedSong->name); ?></h3>
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('open', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="delete()" class="btn btn-danger">Eliminar</button>
            </div>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>

    <script type="module" src="<?php echo e(asset('js\Admin\Alerts.js')); ?>"></script>
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/song/songs.blade.php ENDPATH**/ ?>