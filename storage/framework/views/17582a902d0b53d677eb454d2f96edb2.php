<div>
    <div style="overflow-x:scroll" class="mx-5 d-flex gap-3">
       
            <!--[if BLOCK]><![endif]--><?php if($type == 'create'): ?>
            <?php elseif($type == 'edit'): ?>
            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Permisos</label>
                <select wire:model.live="collabChords" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones con Acordes Propios</option>
                    <option value="<?php echo e(true); ?>">Canciones con Acordes Colaborativos</option>
                </select>
            </div>
            <?php elseif($type == 'delete'): ?>
            <?php else: ?>
            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Permisos</label>
                <select wire:model.live="ownChords" class="form-control">
                    <option value="<?php echo e(false); ?>">Todas las Canciones con Acordes</option>
                    <option value="<?php echo e(true); ?>">Canciones con acordes propios</option>
                </select>
            </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="d-flex gap-2 flex-column">
            <label for="" class="fw-bold">Paginación</label>    
            <select wire:model.live="quantity" class="form-control">
                <option value="12">12</option>
                <option value="36">36</option>
                <option value="54">54</option>
            </select>
            </div>

            <div class="d-flex gap-2 flex-column">
            
                <label for="" class="fw-bold">Nombre</label>    
                <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">
                    
            </div>

            <div class="d-flex gap-2 flex-column">
                <label for="" class="fw-bold">Género</label>    
                <select wire:model.live="genreId" class="form-control">
                    <option value="<?php echo e(null); ?>">Todos</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
            </div>
      

    </div>

    <div class="d-flex justify-content-center mt-2">
        <?php echo e($songs->links()); ?>

    </div>
    <div class="ms-5 me-3 row justify-content-center">

        <div id="song_row" class="row">


            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            
                <?php if (isset($component)) { $__componentOriginalea968d93a10855a4626a744f34e693f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea968d93a10855a4626a744f34e693f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chord.chord-card','data' => ['author' => $song->author->name,'name' => ''.e($song->name).'','image' => ''.e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png').'','type' => ''.e($type).'','id' => ''.e($song->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chord.chord-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($song->author->name),'name' => ''.e($song->name).'','image' => ''.e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png').'','type' => ''.e($type).'','id' => ''.e($song->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea968d93a10855a4626a744f34e693f3)): ?>
<?php $attributes = $__attributesOriginalea968d93a10855a4626a744f34e693f3; ?>
<?php unset($__attributesOriginalea968d93a10855a4626a744f34e693f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea968d93a10855a4626a744f34e693f3)): ?>
<?php $component = $__componentOriginalea968d93a10855a4626a744f34e693f3; ?>
<?php unset($__componentOriginalea968d93a10855a4626a744f34e693f3); ?>
<?php endif; ?>
               
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div>
                    No hay canciones subidas
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>


    </div>

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($deleteModal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($deleteModal).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Eliminar Acorde</h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4>Estás seguro de que quieres eliminar estos acordes?</h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('deleteModal', false)">Cerrar</button>
                <button wire:click="delete()" class="btn btn-primary">Aceptar</button>
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
    
</div>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/chord/chords.blade.php ENDPATH**/ ?>