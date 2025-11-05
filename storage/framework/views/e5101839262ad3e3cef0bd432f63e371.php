<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
            <!--[if BLOCK]><![endif]--><?php if($type == 'create'): ?>
            <?php elseif($type == 'edit'): ?>
                <select wire:model.live="collabChords" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones con Acordes Propios</option>
                    <option value="<?php echo e(true); ?>">Canciones con Acordes Colaborativos</option>
                </select>
            <?php elseif($type == 'delete'): ?>
            <?php else: ?>
                <select wire:model.live="ownChords" class="form-control">
                    <option value="<?php echo e(false); ?>">Todas las Canciones con Acordes</option>
                    <option value="<?php echo e(true); ?>">Canciones con acordes propios</option>
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

    <div class="d-flex justify-content-center mt-2">
        <?php echo e($songs->links()); ?>

    </div>
    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <!--[if BLOCK]><![endif]--><?php if($type == 'delete'): ?>
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="<?php echo e(route('chordsDeleteIndex', $song->id)); ?>">
                                    <h4><?php echo e($song->name); ?></h4>
                                    <p><?php echo e($song->author->name); ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php elseif($type == 'create'): ?>
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="<?php echo e(route('chordsCreate', $song->id)); ?>">
                                    <h4><?php echo e($song->name); ?></h4>
                                    <p><?php echo e($song->author->name); ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php elseif($type == 'edit'): ?>
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="<?php echo e(route('chordsEditSong', $song->id)); ?>">
                                    <h4><?php echo e($song->name); ?></h4>
                                    <p><?php echo e($song->author->name); ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php else: ?>
                    <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="d-flex">

                            <div>
                                <img width="100px" height="100px"
                                    src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                    alt="">

                            </div>
                            <div class="ms-3">
                                <a class="link-dark" href="<?php echo e(route('chord.versions', $song->id)); ?>">
                                    <h4><?php echo e($song->name); ?></h4>
                                    <p><?php echo e($song->author->name); ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div>
                    No hay canciones subidas
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>


    </div>

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($deleteModal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($deleteModal).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Eliminar Acorde</h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4>Estás seguro de que quieres eliminar estos acordes?</h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button wire:click="delete()" class="btn btn-primary">Aceptar</button>
            </div>

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
    
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/chord/chords.blade.php ENDPATH**/ ?>