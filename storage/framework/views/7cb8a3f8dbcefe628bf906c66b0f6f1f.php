<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => 'Crear Cancionero']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Crear Cancionero']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $attributes = $__attributesOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__attributesOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $component = $__componentOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__componentOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>


    <h3 class="ms-5 pb-3">
        Añade las canciones que necesites
    </h3>

    <div class="container-fluid">


        <div class="row d-flex justify-content-center">


            <div class="col-xl-4 d-flex flex-column gap-3 col-md-12 col-12 ms-5">
                <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['class' => 'd-none','id' => 'songs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none','id' => 'songs']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1f715251ca27813040dd69c48bb81eec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f715251ca27813040dd69c48bb81eec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.label','data' => ['text' => 'Tus Canciones']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Tus Canciones']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $attributes = $__attributesOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__attributesOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $component = $__componentOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__componentOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
                <li class="list-group-item d-none" draggable="true" id="liTemplate">

                    <div class="d-flex">
                        Tu fidelidad es grande
                    </div>

                    <div class="d-flex justify-content-end">
                        <button id="deleteButton" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </li>
                <div class="list-group me-xl-0 me-md-5 me-5" id="addedSongs">


                </div>





                <div class="d-flex flex-column w-75">
                    <?php if (isset($component)) { $__componentOriginal1f715251ca27813040dd69c48bb81eec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f715251ca27813040dd69c48bb81eec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.label','data' => ['text' => 'Nombre del Cancionero']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Nombre del Cancionero']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $attributes = $__attributesOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__attributesOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $component = $__componentOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__componentOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['name' => 'list_name','id' => 'list_name','placeholder' => 'Ej: Servicio para Jóvenes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'list_name','id' => 'list_name','placeholder' => 'Ej: Servicio para Jóvenes']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>

                </div>


                <div class="d-flex flex-column align-items-start">
                    <h6 class="fw-bold">Participación colaborativa</h6>
                    <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['checkbox' => ''.e(true).'','type' => 'checkbox','id' => 'collab','name' => 'collab','value' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checkbox' => ''.e(true).'','type' => 'checkbox','id' => 'collab','name' => 'collab','value' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>


                </div>

                <div>
                    <?php if (isset($component)) { $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.button','data' => ['color' => 'primary','id' => 'submit','text' => 'Subir Cancionero']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'primary','id' => 'submit','text' => 'Subir Cancionero']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $attributes = $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $component = $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>

                </div>

            </div>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('file.file-songs', ['songs' => $songs]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1875709414-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            




        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="<?php echo e(asset('js/List/SongListCreate.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Search/SearchListSongs.js')); ?>"></script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/List/create.blade.php ENDPATH**/ ?>