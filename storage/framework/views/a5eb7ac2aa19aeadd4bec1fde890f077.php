<div>
    <div class="d-flex justify-content-center mx-5">
        <div class="d-flex justify-content-center mx-5 w-50 gap-3">
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
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                    <div class="d-flex">

                        <div>
                            <img width="100px" height="100px"
                                src="<?php echo e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?> "
                                alt="">

                        </div>
                        <div class="ms-3">
                            <a class="link-dark" href="<?php echo e(route('acordes.edit', $song->id)); ?>">
                                <h4><?php echo e($song->name); ?></h4>
                                <p><?php echo e($song->author->name); ?></p>
                            </a>
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
    
</div>
<?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/livewire/chord/chords.blade.php ENDPATH**/ ?>