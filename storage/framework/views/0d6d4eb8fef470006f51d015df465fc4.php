<?php $__env->startSection('content'); ?>
    <?php
        $songIds = $file->songs->pluck('id')->toArray();
        $currentIndex = array_search($song->id, $songIds);
        $nextIndex = ($currentIndex + 1) % count($songIds);
        $prevIndex = $currentIndex == 0 ? count($songIds) - 1 : $currentIndex - 1;
        $nextSongId = $songIds[$nextIndex];
        $prevSongId = $songIds[$prevIndex];
        $nextSong = $file->songs->firstWhere('id', $nextSongId);
        $prevSong = $file->songs->firstWhere('id', $prevSongId);
    ?>




    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/winbox.min.css')); ?>">
    <!-- Themes -->
    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">

    <script src="<?php echo e(asset('templates/draggable/js/winbox.min.js')); ?>"></script>
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }

        .nav-controller {

            display: flex;
            justify-content: center;


            gap: 30px;

        }
    </style>




    <input type="text" id="songjson" value="<?php echo e($song->structure); ?>" class="d-none">
    <input id="username" value="<?php echo e(Auth::user()->name); ?>" type="hidden" name="">

    <input id="id" value="<?php echo e(Auth::user()->id); ?>" type="hidden" name="">
    <input id="img" value="<?php echo e(Auth::user()->image->url ?? 'nada'); ?>" type="hidden" name="">


    <div class="row">
        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">


                <h1 class="fw-bold"><?php echo e($song->name); ?></h1>

            </div>
        </div>

        <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
            <div class="d-flex my-3">
                <h6 class="me-1 mt-2">Subido por: <span class="fw-bold"><?php echo e($song->user->roles->first()->name); ?></span>
                    <?php echo e($song->user->name); ?></h6> <img class="img-profile rounded-circle" width="32" height="32"
                    src="<?php echo e($song->user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'); ?>"></img>
            </div>
        </div>

    </div>




    <div
        class="d-flex flex-xl-row flex-md-row flex-sm-column flex-column align-items-center justify-content-center gap-3 my-3">
        <a class="order-1" href="<?php echo e(route('chord.versions', $song->id)); ?>"><button class="btn btn-primary">Ver
                acordes</button> </a>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
            <?php if($song->collab || $song->user_id == Auth::id()): ?>
                <a class="" href="<?php echo e(route('canciones.edit', $song->id)); ?>"><button
                        class="btn btn-success">Modificar</button></a>
            <?php endif; ?>
        <?php endif; ?>

        <button id="export" class="btn btn-primary">
            Exportar
        </button>




        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
            <?php if($song->collab || $song->user_id == Auth::id()): ?>
                <form id="delform" action="<?php echo e(route('canciones.destroy', $song->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button data-id="<?php echo e($song->id); ?>" class="btn btn-danger">Eliminar</button>

                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>



    <h3 class="text-center fw-bold mt-3">Controles</h3>
    <div class="nav-controller ">
        <a href="/cancionero/<?php echo e($file->id); ?>/cancion/<?php echo e($prevSong->id); ?>" style="text-decoration:none">
            <button class="btn btn-primary">
                <i class="fas fa-arrow-left"></i>
            </button>
        </a>
        <button id="openWindow" onclick="openSongList()" class="btn btn-primary d-none">
            Abrir Cancionero
        </button>
        <a href="/cancionero/<?php echo e($file->id); ?>/cancion/<?php echo e($nextSong->id); ?>" style="text-decoration:none">
            <button class="btn btn-primary">
                <i class="fas fa-arrow-right"></i>
            </button>
        </a>
    </div>

    <div class="m-auto">
        <div class="p-5">
            <div class="text-start structure  " id="structure">

            </div>
        </div>

    </div>


    <div class="ms-5 d-flex flex-column align-items-Start gap-3 mt-5">
        <h3 class="fw-bold">
            Tonalidades


            <?php $__currentLoopData = $song->tonalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $userId = $ton->pivot->user_id;
                    $user = \App\Models\User::find($userId);
                ?>
                <h4><b><?php echo e($ton->name); ?></b>: <?php echo e($user->name); ?></h4>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <form class="d-flex flex-column gap-3"method="POST" action="<?php echo e(route('tonality.store')); ?>">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="song_id" value="<?php echo e($song->id); ?>">
                <div class="col-2">
                    <select name="tonality" class="form-control" id="">
                        <?php $__currentLoopData = $tonalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ton->id); ?>"><?php echo e($ton->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">
                        Subir Tonalidad
                    </button>
                </div>

            </form>

    </div>

    <div>
        <div id="copyme" class="p-5 d-none">
            <h3>Hola</h3>
            <h3>Hola</h3>
        </div>
    </div>

    <input type="hidden" value="<?php echo e($file); ?>" class="fileValue" name="">
    <ul id="fileList" class="list-group m-5 d-none">
        <?php $__currentLoopData = $file->songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/cancionero/<?php echo e($file->id); ?>/cancion/<?php echo e($song->id); ?>">
                <li class="list-group-item"><?php echo e($song->name); ?></li>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div id="editMenu" class="d-none"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        const fileValue = document.querySelector('.fileValue').value;
        const fileList = document.getElementById('fileList').cloneNode(true);
        const openWindow = document.getElementById('openWindow');
        fileList.classList.add('d-block');
        const file = JSON.parse(fileValue);
        new WinBox(`${file.name}`, {
            mount: fileList,
            min: true,
            onclose: function() {
                openWindow.classList.add('d-block');

            },
        });

        function openSongList() {
            new WinBox(`${file.name}`, {
                mount: fileList,

                onclose: function() {
                    openWindow.classList.add('d-block');

                },
            });
            openWindow.classList.remove('d-block');
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo e(asset('js/PDF/PDF.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Song/SongPrevLivewire.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Song/SongDelete.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/List/songInFile.blade.php ENDPATH**/ ?>