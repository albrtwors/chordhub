<div>
  
        <div class="d-flex gap-3 mx-5" style="overflow-x:scroll">
            <!--[if BLOCK]><![endif]--><?php if($type == 'show'): ?>
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">
                    Permisos
                </label>
                <select wire:model.live="ownFiles" class="form-control">

                    <option value="<?php echo e(false); ?>">Cancioneros de todos</option>
                    <option value="<?php echo e(true); ?>">Solo cancioneros Propios</option>
                </select>
            </div>
            <?php elseif($type == 'edit'): ?>
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">
                    Permisos
                </label>
                <select wire:model.live="collabFiles" class="form-control">
                    <option value="<?php echo e(false); ?>">Cancioneros Propios</option>
                    <option value="<?php echo e(true); ?>">Solo Cancioneros Colaborativos</option>
                </select>
            </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <div class="d-flex flex-column gap-2">
            <label for="" class="fw-bold">
                Paginación
            </label>
            <select wire:model.live="quantity" class="form-control">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="60">60</option>
            </select>
            </div>
            <div class="d-flex flex-column gap-2">
            <label for="" class="fw-bold">
                Nombre
            </label>           
            <input wire:model.live="name" placeholder="Busca un cancionero" type="text" class="form-control">
            </div>


        </div>

  

    <div class="d-flex justify-content-center mt-2">
        <?php echo e($lists->links()); ?>

    </div>

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div id="list_row" class="row">
               
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                     <?php if (isset($component)) { $__componentOriginald5431a6480dec0497ab897d29c9901c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5431a6480dec0497ab897d29c9901c6 = $attributes; } ?>
<?php $component = App\View\Components\File\FileCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('file.file-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\File\FileCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($li->id).'','type' => ''.e($type).'','name' => ''.e($li->name).'','author' => ''.e($li->user->name).'','songs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($li->songs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5431a6480dec0497ab897d29c9901c6)): ?>
<?php $attributes = $__attributesOriginald5431a6480dec0497ab897d29c9901c6; ?>
<?php unset($__attributesOriginald5431a6480dec0497ab897d29c9901c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5431a6480dec0497ab897d29c9901c6)): ?>
<?php $component = $__componentOriginald5431a6480dec0497ab897d29c9901c6; ?>
<?php unset($__componentOriginald5431a6480dec0497ab897d29c9901c6); ?>
<?php endif; ?>
                    

















                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="m-5">
                        <h6>No hay cancioneros</h6>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </section>

    </div>



    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($open).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($open).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">
                Eliminar cancionero
            </h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h3 class="fw-bold">Estás seguro de que quieres eliminar <?php echo e($selectedFile->name); ?></h3>
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('open', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="delete()" class="btn btn-danger">Eliminar</button>
            </div>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>

    <script type="module" src="<?php echo e(asset('js\Admin\Alerts.js')); ?>"></script>


</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/file/files.blade.php ENDPATH**/ ?>