<?php $__env->startSection('content'); ?>
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }
    </style>
    <input type="text" id="songjson" value="<?php echo e($songs->structure); ?>" class="d-none">
    <input id="username" value="<?php echo e(Auth::user()->name); ?>" type="hidden" name="">

    <input id="id" value="<?php echo e(Auth::user()->id); ?>" type="hidden" name="">
    <input id="img" value="<?php echo e(Auth::user()->image->url ?? 'nada'); ?>" type="hidden" name="">


    <div class="row">
        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">


                <h1 class="fw-bold"><?php echo e($songs->name); ?></h1>

            </div>
        </div>

        <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
            <div class="d-flex my-3">
                <h6 class="me-1 mt-2">Subido por: <span class="fw-bold"><?php echo e($user->roles->first()->name); ?></span>
                    <?php echo e($user->name); ?></h6> <img class="img-profile rounded-circle" width="32" height="32"
                    src="<?php echo e($user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'); ?>"></img>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center gap-3 my-3">
        <a class="order-1" href="<?php echo e(route('acordes.show', $songs->id)); ?>"><button class="btn btn-primary">Ver
                acordes</button> </a>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
            <a class="" href="<?php echo e(route('canciones.edit', $songs->id)); ?>"><button
                    class="btn btn-success">Modificar</button></a>
        <?php endif; ?>

        <button id="export" class="btn btn-primary">
            Exportar
        </button>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
            <form id="delform" action="<?php echo e(route('canciones.destroy', $songs->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button data-id="<?php echo e($songs->id); ?>" class="btn btn-danger">Eliminar</button>

            </form>
        <?php endif; ?>
    </div>

    

    <div class="m-auto">
        <div class="text-start structure p-5 " id="structure">

        </div>
    </div>


    <div class="ms-5 d-flex flex-column align-items-center">
        <h3 class="fw-bold">
            Tonalidades


            <?php $__currentLoopData = $songs->tonalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h4><?php echo e($ton->name); ?></h4>
                <?php
                    $userId = $ton->pivot->user_id;
                    $user = \App\Models\User::find($userId);
                ?>
                <p>Usuario: <?php echo e($user->name); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <form method="POST" action="<?php echo e(route('tonality.store')); ?>">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="song_id" value="<?php echo e($songs->id); ?>">
                <select name="tonality" class="form-control" id="">
                    <?php $__currentLoopData = $tonalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ton->id); ?>"><?php echo e($ton->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                <button class="btn btn-primary">
                    Dale
                </button>
            </form>

    </div>

    <div class="m-5 p-5 border">
        <h3 class="fw-bold mb-5">Comentarios</h3>
        <?php if (isset($component)) { $__componentOriginal2c92387a09c02b28a7d3eedc666f8331 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331 = $attributes; } ?>
<?php $component = App\View\Components\Comments\Comments::resolve(['route' => ''.e(route('comments.store')).'','postype' => 'App\Models\Song','postid' => $songs->id,'list' => $comments] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Comments::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c92387a09c02b28a7d3eedc666f8331)): ?>
<?php $attributes = $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331; ?>
<?php unset($__attributesOriginal2c92387a09c02b28a7d3eedc666f8331); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c92387a09c02b28a7d3eedc666f8331)): ?>
<?php $component = $__componentOriginal2c92387a09c02b28a7d3eedc666f8331; ?>
<?php unset($__componentOriginal2c92387a09c02b28a7d3eedc666f8331); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc = $attributes; } ?>
<?php $component = App\View\Components\Comments\Form::resolve(['parentid' => null,'postype' => 'App\Models\Song','postid' => $songs->id,'route' => ''.e(route('comments.store')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Comments\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc)): ?>
<?php $attributes = $__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc; ?>
<?php unset($__attributesOriginala066c5c0da3fc2b12aaa86c8b162c2fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc)): ?>
<?php $component = $__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc; ?>
<?php unset($__componentOriginala066c5c0da3fc2b12aaa86c8b162c2fc); ?>
<?php endif; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="module" src="<?php echo e(asset('js/Comments/CommentHandler.js')); ?>"></script>
    <script src="<?php echo e(asset('js/PDF/PDF.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Song/SongView.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Song/SongDelete.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Song/song.blade.php ENDPATH**/ ?>