<div>

    <div class="ms-5">
    <div class="mb-1">
        <button wire:click="$set('createModal', true)" type="button" class="btn btn-primary">
            Crear Item
        </button>
    </div>
    <div class="d-flex mb-5 justify-content-center gap-5">
        <div class="d-flex  gap-3">
            <label for="" class="fw-bold">Paginación</label>
            <select wire:model.live='quantity' name="" class="form-control" id="">
                <option value="">12</option>
                <option value="">24</option>
                <option value="">36</option>
            </select>
        </div>

        <div class="d-flex  gap-3">
            <label  for="" class="fw-bold">Implemento</label>
            <input wire:model.live="name" type="text" placeholder="Guitarra, Violín.." class="form-control">
        </div>


        
    </div>
    <div class="d-flex justify-content-center">
        <?php echo e($items->links()); ?>

    </div>
    <div class="row gap-1 d-flex justify-content-center">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 d-flex gap-3 flex-column align-items-center p-3 justify-content-center bg-white rounded border col-md-5 col-sm-6 col-6">
          
                <h6 class="fw-bold d-flex gap-3 align-items-center">
                    <?php echo e($item->name); ?>

                    <div class="btn bg-success-subtle text-success">
                        <?php echo e($item->quantity); ?>

                    </div>
                </h6>



            <img width="100" height="100" src="<?php echo e($item->image ? $item->image->url : 'https://clipart-library.com/2023/musical-notes-2-half-notes-clipart.png'); ?>" alt="">
            <div class="d-flex justify-content-center gap-2">
                
                <button wire:click="handleModify(<?php echo e($item); ?>)" class="btn btn-success">
                    Modificar
                </button>
                <button wire:click="handleDelete(<?php echo e($item->id); ?>)" class="btn btn-danger">
                    Eliminar
                </button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => $deleteModal]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($deleteModal)]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Eliminar <?php echo e($selectedItem->name); ?> ?</h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button wire:click="delete" class="btn btn-primary" wire:click="">Aceptar</button>
            </div>
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


    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => $createModal]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($createModal)]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h4 class="fw-bold">Crear Item</h6>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            
            
            <!--[if BLOCK]><![endif]--><?php if($createData['image']): ?>
                <div wire:loading.hide wire:target="createData.image" class="d-flex justify-content-center mb-3">
                    <img width="150px" height="150px" class="rounded-circle" src="<?php echo e($createData['image']->temporaryUrl()); ?>"
                        alt="">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <label for="" class="fw-bold">Nombre</label>
            <input class="form-control" wire:model.live="createData.name" type="text" placeholder="Guitarra...">
            <label for="" class="fw-bold">Cantidad</label>
            <input class="form-control" wire:model.live="createData.quantity" type="number" placeholder="2...">
            <label class="fw-bold">Foto de perfil</label>
            <input wire:model.defer="createData.image" type="file" name="imagen" 
                class="form-control">


         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('createModal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="create">Crear</button>
            </div>
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

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => $modifyModal]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($modifyModal)]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Modificar <?php echo e($selectedItem->name); ?></h1>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
       
            <label for="" class="fw-bold">Nombre</label>
            <input wire:model.live="modItem.name" type="text" class="form-control">
            <label for="" class="fw-bold">Cantidad</label>
            <input wire:model.live="modItem.quantity" type="text" class="form-control">
            <label for="" class="fw-bold">Imagen</label>
            <input wire:model.live="modItem.image" type="file" class="form-control">
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('modifyModal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="modify">Aceptar</button>
            </div>
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

<script type="module" src="<?php echo e(asset('js/Admin/Alerts.js')); ?>"></script>

</div>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/items/items-table.blade.php ENDPATH**/ ?>