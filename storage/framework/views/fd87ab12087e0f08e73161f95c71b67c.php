<?php $__env->startSection('content'); ?>






<h1 class="ms-5 fw-bold py-3">
    Crear Cancionero
</h1>
<h3 class="ms-5 pb-3">
    Añade las canciones que necesites
</h3>

<div class="container-fluid">


<div class="row d-flex justify-content-center">

    <div class="col-xl-4 col-md-12 col-12 ms-5">

        <h6 class="mt-3">Tus Canciones</h6>
        <div class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">
            <li class="list-group-item d-none" id="liTemplate">
                
                <div class="d-flex">
                    Tu fidelidad es grande
                </div>
                
                <div class="d-flex justify-content-end">
                    <button id="deleteButton" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </li>

            
        </div>

        <h6 class="mt-3">Nombre del cancionero</h6>

        <div class="input-group mt-3 w-75" >
            <input type="text" class="form-control bg-light small" name="list_name" id="list_name"
                placeholder="ej: Servicio para la familia" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div>
            <button class="btn btn-primary mt-3" id="submit" value="Subir cancionero">Subir Cancionero</button>

        </div>
    </div>

    <div class="col-xl-6">
        <div class="d-flex justify-content-center mb-2">
                <div class="col-6">
                    <input type="text" class="shadow-sm form-control bg-light border-0 small" name="songname" id="song_search" placeholder="Buscar..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                </div>
                
        
       
        </div>
        <ul class="list-group" id="songsToAdd">
            <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li id="song_template" value="<?php echo e($song->name); ?>" data-id="<?php echo e($song->id); ?>" class="list-group-item d-flex"><?php echo e($song->name); ?><button onclick="ListInstance.addSong(this.parentNode.getAttribute('value'), this.parentNode.getAttribute('data-id'))" class="ms-auto btn btn-success"> + </button></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>


        

    </div>
</div>
<div class="mt-3 ms-5 my-3">


</div>


    



<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js" integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="<?php echo e(asset('js/List/SongListCreate.js')); ?>"></script>
<script type="module" src="<?php echo e(asset('js/Search/SearchListSongs.js')); ?>"></script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/mrrobot/coding/ChordhubV2/resources/views/modules/List/create.blade.php ENDPATH**/ ?>