<div>

    <div style="overflow-x:scroll" class="d-flex gap-3 mx-5 ">

      
        
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Paginación</label>
                <select class="form-control" wire:model.live="quantity">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>

                
            </div>

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Descripción</label>
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

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Desde</label>
                <input wire:model.live="startDate" type="date" class="form-control">
                
            </div>
            
             <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Hasta</label>
                <input wire:model.live="endDate" type="date" class="form-control">
            </div>      

    </div>
    <div class="d-flex justify-content-center gap-5 mt-3">
        <?php echo e(count($logs) > 0 ? $logs->links(data: ['scrollTo' => false]) : ''); ?> 

    </div>

    <div class="mx-3" style="min-width:full; overflow-x:scroll">
        <table class="container-fluid">
            <thead>
                <tr>
                    <th wire:click='' style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Id
                        <!--[if BLOCK]><![endif]--><?php if($order == 'id'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                    <th wire:click="" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Descripción
                        <!--[if BLOCK]><![endif]--><?php if($order == 'name'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                    </th>
                    <th wire:click="sorting('email')" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Usuario
                        <!--[if BLOCK]><![endif]--><?php if($order == 'email'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                    <th class="bg-primary p-2 text-white">Fecha</th>

                    <th class="bg-primary p-2 text-white">Tiempo Transcurrido</th>
                </tr>
            </thead>


    </div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr  class="p-3 rowitem <?php echo e($index%2==0?'bg-primary-subtle':'bg-white'); ?>" wire:key="<?php echo e($item->id); ?>">
            <td><?php echo e($item->id); ?></td>
            <td>

                <?php echo e($item->name); ?>

            </td>
            <td><?php echo e($item->user->name); ?></td>
            <td><?php echo e($item->created_at); ?></td>

            <td>
            <?php echo e($item->created_at->diffForHumans()); ?>    

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
           <input id="visible-data" class="d-none fafafa" value="<?php echo e($logs->getCollection()); ?>" type="text">


    

</table>

</div>

<div wire:ignore class="d-flex justify-content-center my-3 gap-2">
    <div id="pdf-exporter"></div>
</div>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/admin/logs-table.blade.php ENDPATH**/ ?>