<?php $__env->startSection('content'); ?>
<h1 class="ms-5 py-3 ">
    Canciones
</h1>
<h3 class="ms-5 pb-3 ">
    Aquí encontrarás todas las canciones disponiles
</h3>



<h4 class="ms-5 pb-3">Géneros</h4>


<div class="d-flex justify-content-center container">

    <div class="div">
        <form class="ms-5 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" id="search_songs" placeholder="Buscar..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="ms-5">
        <button class="btn btn-primary active">Todos</button>
        <button class="btn mx-3 btn-primary">Pop</button>
        <button class="btn btn-primary">Rock</button>
        <button class="btn mx-3 btn-primary">Balada</button>
        <button class="btn btn-primary">Bossa Nova</button>
    </div>

</div>

<div class="ms-5 me-3 row justify-content-center">

<div id="song_row" class="row">


<?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            
                <div id="song_template" class="col-xl-4 col-md-6 col-sm-12 mt-5">
                    <div class="d-flex">

                        <div>
                            <img width="100px" height="100px"
                                src="https://cdn-icons-png.flaticon.com/512/3809/3809073.png" alt="">

                        </div>
                        <div class="ms-3">
                            <a class="link-dark" href="<?php echo e(route("song", $song->id)); ?>">
                                <h4><?php echo e($song->name); ?></h4>
                                <p><?php echo e($song->author); ?></p>
                            </a>
                        </div>

                    </div>
                </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    
<div>
    no hay mas canciones
</div>
<?php endif; ?>
</div>


</div>
<script type="module" src="<?php echo e(asset('js/Search/SearchSong.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/Song/songs.blade.php ENDPATH**/ ?>