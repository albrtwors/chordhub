<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => 'Registro de actividad']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Registro de actividad']); ?>
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
 <div>



    <div class="d-flex flex-column align-items-center justify-items-start">

        <div class="d-flex justify-content-center gap-2">
            <select class="form-control w-25" wire:model.live="quantity">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <?php if (isset($component)) { $__componentOriginal417c5b746b55377fcd8e48694ce53b10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal417c5b746b55377fcd8e48694ce53b10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.normal-input','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('normal-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal417c5b746b55377fcd8e48694ce53b10)): ?>
<?php $attributes = $__attributesOriginal417c5b746b55377fcd8e48694ce53b10; ?>
<?php unset($__attributesOriginal417c5b746b55377fcd8e48694ce53b10); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal417c5b746b55377fcd8e48694ce53b10)): ?>
<?php $component = $__componentOriginal417c5b746b55377fcd8e48694ce53b10; ?>
<?php unset($__componentOriginal417c5b746b55377fcd8e48694ce53b10); ?>
<?php endif; ?>
        </div>

    </div>
 

    <div class="container-fluid d-flex justify-content-center mt-3">
        <table class="container-fluid">
            <thead>
                <tr>
          
                    <th wire:click="sorting('name')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Descripción
              


                    </th>
                    <th wire:click="sorting('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Fecha
           

                    </th>
                    <th class="bg-primary p-2 text-white">Tiempo Transcurrido</th>

                    
                </tr>
            </thead>


    </div>
    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="p-3 <?php echo e($index%2==0?'bg-primary-subtle':'bg-white'); ?>">
   
            <td>

                <?php echo e($log->name); ?>

            </td>
            <td><?php echo e($log->created_at); ?></td>
            <td><?php echo e($log->created_at->diffForHumans()); ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>
</div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/logs/userIndex.blade.php ENDPATH**/ ?>