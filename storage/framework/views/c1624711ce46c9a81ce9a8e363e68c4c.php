<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal1334642c7f94c16deb2c06f626f62ec8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8 = $attributes; } ?>
<?php $component = App\View\Components\App\PageHeader::resolve(['text' => 'Modifica '.e($list->name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $attributes = $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $component = $__componentOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>
    <h3 class="ms-5 pb-3">
        Añade las canciones que necesites
    </h3>

    <div class="container-fluid">


        <div class="row d-flex justify-content-center">

            <div class="col-xl-4 gap-3 d-flex flex-column col-md-12 col-12 ms-5">

                <h6 class="mt-3 fw-bold">Tus Canciones</h6>
                <div class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">



                    <li class="list-group-item d-none" id="liTemplate">

                        <div class="d-flex">
                            Tu fidelidad es grande
                        </div>

                        <div class="d-flex justify-content-end">
                            <button id="deleteButton" onclick="" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </li>
                    <?php $__empty_1 = true; $__currentLoopData = $list_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $son): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="list-group-item " id="liTemplate">

                            <div class="d-flex">

                                <?php echo e($son->name); ?>

                            </div>
                            <div class="d-flex justify-content-end">
                                <button data-id="<?php echo e($son->id); ?>" id="deleteButton"
                                    onclick="ListInstance.deleteSong(this)" class="btn btn-danger songbut">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                            <i class="fas fa-bars"></i>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>

                </div>


                <form id="fileform" class="d-flex flex-column align-items-start gap-3"
                    action="<?php echo e(route('cancioneros.update', $list->id)); ?>">



                    <div class="d-flex flex-column w-75">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['text' => 'Nombre del Cancionero'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Label::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'list_name','id' => 'list_name','value' => ''.e($list->name).'','placeholder' => 'Ej: Servicio para Jóvenes']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>

                    </div>


                    <div class="d-flex flex-column align-items-start w-75">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['text' => 'Participación Colaborativa'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Label::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                        <input <?php echo e($list->collab ? 'checked' : ''); ?> type="checkbox" name="collab" id=""
                            value="1">

                    </div>


                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input id="songs" name="songs" type="text" class="d-none">

                    <button class="btn btn-primary mt-3" id="submit" value="Subir cancionero">Subir
                        Cancionero</button>
                </form>
            </div>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('file.file-songs', ['songs' => $songs]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2029879590-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            



        </div>

    </div>

    <div class="mt-3 ms-5 my-3">



    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="<?php echo e(asset('js/List/SongListModify.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Search/SearchListSongs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/List/modify_list.blade.php ENDPATH**/ ?>