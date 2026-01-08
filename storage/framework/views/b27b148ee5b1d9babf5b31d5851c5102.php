<?php $__env->startSection('content'); ?>
<div class="row gap-2">
    <?php if (isset($component)) { $__componentOriginald5a15c6dbb425adf25438466fa335ada = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5a15c6dbb425adf25438466fa335ada = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.react.vite-refresh','data' => ['path' => 'resources/react/practice/components/Participants.jsx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['path' => 'resources/react/practice/components/Participants.jsx']); ?>
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
    <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => 'Organizar un Ensayo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Organizar un Ensayo']); ?>
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
    <form  id="practice-form" action="<?php echo e(route('ensayos.store')); ?>">
    <?php echo method_field('POST'); ?>
    <?php echo csrf_field(); ?>
    <div class="mx-5 d-flex flex-column gap-2">
        <h5 class="fw-bold">Detalles del Ensayo</h5>
        <p>Completa la información sobre la fecha, hora, detalles, lugar....</p>


        <div class="row gap-2">
            
            <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Fecha</label>
                <input name="performDate" id="performDate" class="form-control" type="date">
            </div>
             <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Hora de Inicio</label>
                <input name="startHour" class="form-control" type="time">
            </div>
            
            <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
                <label for="" class="fw-bold">Hora de Cierre</label>
                <input name="endHour" class="form-control" type="time">
            </div>
            

        </div>
        
        <div class="d-flex gap-2 flex-column">
            <label for="" class="fw-bold">Ubicación</label>
            <div class="ms-0 col-xl-3 col-md-8 col-sm-8 col-8 position-relative">

                <input name="location" placeholder="Maracay Av Bolivar..." class="form-control"  type="text">
                <i style="color: #2c2c2c; top:10px; right:30px;" class="position-absolute  fas fa-map">

                </i>
            </div>


        </div>

        <label for="" class="fw-bold">Nombre del ensayo</label>
        <div class="d-flex col-xl-3 col-md-8 col-sm-8 col-8 flex-column">
            
            <input name="name" placeholder="Ensayo dia de la familia..." name="performDate" id="name" class="form-control" type="text">
        </div>


        <div class="d-flex mt-3 flex-column">
            <h5 class="fw-bold">Logística y Preparación</h5>
            <p>Define quienes van a participar y los aditamentos necesarios</p>

            <div id="participants-widget">

            </div>

            <div class="d-flex mt-3">
                <button type="submit" class="btn btn-primary">
                    Crear el Ensayo
                </button>
            </div>

        </div>
        
    </div>
    </form>
</div>

<?php $__env->startPush('scripts'); ?>
    <script type="module" src="<?php echo e(asset('js/Practice/Create.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Practice/index.blade.php ENDPATH**/ ?>