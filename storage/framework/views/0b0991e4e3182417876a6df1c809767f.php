<?php $__env->startSection('content'); ?>
    <style>
        #structure {

            border-radius: 50px;
            line-height: 2;
            width: 70vw;

        }

        .chord-card {
            height: 250px;
            width: 190px;
            overflow: hidden;

            border-radius: 20px;

        }

        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            background: rgb(180, 226, 255);
            color: rgb(72, 72, 72);
            font-size: 0.9em;
            font-style: italic;
            font-weight: bold;
        }

        .chord.chord-small {
            font-size: 0.7em;
            letter-spacing: 0.001px;
        }

        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;

        }
    </style>


    <?php if (isset($component)) { $__componentOriginald5a15c6dbb425adf25438466fa335ada = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5a15c6dbb425adf25438466fa335ada = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.react.vite-refresh','data' => ['path' => 'resources/react/comments/entry.jsx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['path' => 'resources/react/comments/entry.jsx']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $attributes = $__attributesOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__attributesOriginald5a15c6dbb425adf25438466fa335ada); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $component = $__componentOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__componentOriginald5a15c6dbb425adf25438466fa335ada); ?>
<?php endif; ?>
    <?php if($chords): ?>
        <input type="text" id="songjson" value="<?php echo e($chords->structure); ?>" class="d-none">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
                <div class="d-flex ms-5 my-3 gap-2">

                    <h1 class="fw-bold"><?php echo e($song->name); ?></h1>
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
                <div class="d-flex my-3">
                    <h6 class="me-1 mt-2">Armonizado por: <b><?php echo e($chords->user->roles->first()->name); ?></b>
                        <?php echo e($chords->user->name); ?> </h6> <img class="img-profile rounded-circle" width="32"
                        height="32"
                        src="<?php echo e($chords->user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>"></img>
                </div>

            </div>

            <div class="col-1">
                <button id="export" class="ms-5 btn btn-primary d-inline">
                    Exportar
                </button>
            </div>


        </div>

        <div class="p-5 m-auto">
            <div class="text-start structure " id="structure">


            </div>

        </div>


        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-primary" id="chord_up_half">1/2+</button>
            <button class="btn btn-primary" id="chord_down_half">1/2-</button>
        </div>

        <?php if (isset($component)) { $__componentOriginal489d95be388931adee106da957892e6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal489d95be388931adee106da957892e6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comments.comment-meta','data' => ['id' => ''.e($chords->id).'','type' => 'chord']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('comments.comment-meta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($chords->id).'','type' => 'chord']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal489d95be388931adee106da957892e6d)): ?>
<?php $attributes = $__attributesOriginal489d95be388931adee106da957892e6d; ?>
<?php unset($__attributesOriginal489d95be388931adee106da957892e6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal489d95be388931adee106da957892e6d)): ?>
<?php $component = $__componentOriginal489d95be388931adee106da957892e6d; ?>
<?php unset($__componentOriginal489d95be388931adee106da957892e6d); ?>
<?php endif; ?>
        <div id="comment-widget"></div>


        
        <div class="d-none" id="editMenu"></div>
    <?php else: ?>
        <h1 class="text-center">Esta canción aún no tiene acordes</h1>
    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/PDF/PDF.js')); ?>"></script>





    <script type="module" src="<?php echo e(asset('js/Song/SongView.js')); ?>"></script>
    
    <script type="module" src="<?php echo e(asset('js/Chord/ChordView.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Chord/song.blade.php ENDPATH**/ ?>