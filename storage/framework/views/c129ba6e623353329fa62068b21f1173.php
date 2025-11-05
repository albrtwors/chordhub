<?php $__env->startSection('content'); ?>
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }


        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            font-style: italic;
            font-weight: bold;
        }


        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;
        }
    </style>



    <?php if($song->chord): ?>
        <input type="text" id="songjson" value="<?php echo e($song->chord->structure); ?>" class="d-none">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
                <div class="d-flex ms-5 my-3 gap-2">
                    <a href="<?php echo e($lastVisited); ?>"><button class="mt-1 btn btn-primary"><i
                                class="fas fa-arrow-left"></i></button></a>
                    <h1 class="fw-bold"><?php echo e($song->name); ?></h1>
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
                <div class="d-flex my-3">
                    <h6 class="me-1 mt-2">Subido por: <?php echo e($song->user->name); ?> </h6> <img class="img-profile rounded-circle"
                        width="32" height="32"
                        src="<?php echo e($song->user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>"></img>
                </div>

            </div>

            <div class="col-1">
                <button id="export" class="ms-5 btn btn-primary d-inline">
                    Exportar
                </button>
            </div>


        </div>

        <div class="text-start p-5 structure m-auto" id="structure">


        </div>

        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-primary" id="chord_up_half">1/2+</button>
            <button class="btn btn-primary" id="chord_down_half">1/2-</button>
        </div>
        <div class="m-5 p-5 border">
            <h3 class="fw-bold mb-5">Comentarios</h3>

            <?php if (isset($component)) { $__componentOriginal2c92387a09c02b28a7d3eedc666f8331 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c92387a09c02b28a7d3eedc666f8331 = $attributes; } ?>
<?php $component = App\View\Components\Comments\Comments::resolve(['route' => ''.e(route('comments.store')).'','postype' => 'App\Models\Chord','postid' => $song->chord->id,'list' => $comments] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\Comments\Form::resolve(['parentid' => null,'postype' => 'App\Models\Chord','postid' => $song->chord->id,'route' => ''.e(route('comments.store')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php else: ?>
        <h1 class="text-center">Esta canción aún no tiene acordes</h1>
    <?php endif; ?>

    
    <script type="module" src="<?php echo e(asset('js/Song/SongView.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Song/SongDelete.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Chord/ChordView.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Chord/song.blade.php ENDPATH**/ ?>