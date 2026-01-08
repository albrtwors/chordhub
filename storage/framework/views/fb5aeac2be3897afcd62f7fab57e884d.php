<div>

    <!-- PRACTICES ROW GRID -->
    <div class="row gap-3">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $practices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $practice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-4 col-md-6 col-sm-8 col-8 d-flex flex-column gap-1 rounded border p-3 bg-white">
            <div class="d-flex gap-3">
            <h6 class="text-black fw-bold">
                <?php echo e($practice->name); ?>

            </h6>
            <div class="flex-1 d-flex justify-content-end">
                <?php if (isset($component)) { $__componentOriginal5efcddbb04a9597dd5f5a98f054f00bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5efcddbb04a9597dd5f5a98f054f00bc = $attributes; } ?>
<?php $component = App\View\Components\Dates\DateStateHelper::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dates.date-state-helper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dates\DateStateHelper::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['date' => ''.e($practice->start_date. ' '.$practice->end_hour).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5efcddbb04a9597dd5f5a98f054f00bc)): ?>
<?php $attributes = $__attributesOriginal5efcddbb04a9597dd5f5a98f054f00bc; ?>
<?php unset($__attributesOriginal5efcddbb04a9597dd5f5a98f054f00bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5efcddbb04a9597dd5f5a98f054f00bc)): ?>
<?php $component = $__componentOriginal5efcddbb04a9597dd5f5a98f054f00bc; ?>
<?php unset($__componentOriginal5efcddbb04a9597dd5f5a98f054f00bc); ?>
<?php endif; ?>

            </div>
            </div>
            <div class="d-flex gap-2 text-primary-subtle">
                <i class="fas text-primary fa-calendar">

                </i>
                <p class="text-primary">
                    <?php echo e($practice->start_date); ?>

                </p>
                
            </div>
            <div class="d-flex gap-2 text-primary-subtle">
                <i class="fas text-primary fa-clock">

                </i>
                <p class="text-primary">
                    <?php echo e($practice->start_hour); ?> - <?php echo e($practice->end_hour); ?>

                </p>

                
            </div>
            
            <p class="fw-bold text-black">Participantes</p>
            <div style="gap:-30; border-radius:10000" class="d-flex">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $practice->userParticipants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($index==0): ?>
                        <img style="border-radius:100%" src="<?php echo e($participant->image ? $participant->image->url : 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'); ?>" width="50" height="50" alt="">
                    <?php else: ?>
                        <img style="margin-left:-10px; border-radius:100%" src="<?php echo e($participant->image ? $participant->image->url : 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'); ?>" width="50" height="50" alt="">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>


            <p class="fw-bold text-black">Implementos</p>
            <div class="row gap-3">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $practice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <span class="bg-primary-subtle text-primary btn">
                        <?php echo e($item->name .' x '.  $item->quantity); ?>

                    </span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        
        
    </div>

</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/practices/pending-practices.blade.php ENDPATH**/ ?>