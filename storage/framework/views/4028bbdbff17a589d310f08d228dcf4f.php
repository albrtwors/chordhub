<div class="col-xl-6 d-flex flex-column gap-3">
    <div class="d-flex flex-column gap-3 align-items-center justify-content-center ">
        <div>
            <input wire:model.live.debounce.250ms="name" type="text"
                class="shadow-sm form-control bg-light border-0 small" name="songname" id="song_search"
                placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
        </div>

        <div class="d-flex gap-3">

            <select wire:model.live="quantity" class="form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>


            <select wire:model.live="genre" class="form-control">
                <option value="<?php echo e(null); ?>">Todos</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>

        <div style="transition-duration:300ms" class="d-flex transition">
            <?php echo e($songs->count() > 0 ? $songs->links(data: ['scrollTo' => false]) : ''); ?>

        </div>


    </div>
    <ul class="list-group" id="songsToAdd">
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li id="song_template" value="<?php echo e($song->name); ?>" data-id="<?php echo e($song->id); ?>"
                class="list-group-item d-flex"><?php echo e($song->name); ?><button
                    onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))"
                    class="ms-auto btn btn-success"> + </button></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="m-5">
                No se encontraron canciones
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/file/file-songs.blade.php ENDPATH**/ ?>