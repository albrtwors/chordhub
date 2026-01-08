<div>

    
        
        <div style="overflow-x:scroll" class="d-flex gap-3 mx-5">
            <!--[if BLOCK]><![endif]--><?php if($type == 'show'): ?>
            <div class="d-flex flex-column gap-2">
                <label  class="fw-bold" for="">Permisos </label>
                <select wire:model.live="ownSongs" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones de todos</option>
                    <option value="<?php echo e(true); ?>">Solo canciones Propias</option>
                </select>
            </div>
            <?php elseif($type == 'edit'): ?>
            <div class="d-flex flex-column gap-2">
                <label  class="fw-bold" for="">Permisos</label>
                <select wire:model.live="collabSongs" class="form-control">
                    <option value="<?php echo e(false); ?>">Canciones Propias</option>
                    <option value="<?php echo e(true); ?>">Canciones Colaborativas</option>
                </select>
            </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Paginación </label>    
            <select wire:model.live="quantity" class="form-control">
                
                <option value="12">12</option>
                <option value="36">36</option>
                <option value="54">54</option>
            </select>
            </div>

            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Nombre</label>
            <input wire:model.live="songName" placeholder="Busca una Canción" type="text" class="form-control">
            </div>
            <div class="d-flex flex-column gap-2">
            <label  class="fw-bold" for="">Géneros </label>
            <select wire:model.live="genreId" placeholder="Género" class="form-control">
        
                <option value="<?php echo e(null); ?>">Todos</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </select>
            </div>


        </div>



    
    <div class="d-flex justify-content-center mt-3">
        <?php echo e($songs->links()); ?>

    </div>


    <div class="ms-5 me-3 row justify-content-center">
        
        <div id="song_row" class="row">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <?php if (isset($component)) { $__componentOriginal695fc28304f759e468d49862df099af0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal695fc28304f759e468d49862df099af0 = $attributes; } ?>
<?php $component = App\View\Components\Song\SongCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('song.song-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Song\SongCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($song->id).'','type' => ''.e($type).'','image' => ''.e($song->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png').'','name' => ''.e($song->name).'','author' => ''.e($song->author->name).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal695fc28304f759e468d49862df099af0)): ?>
<?php $attributes = $__attributesOriginal695fc28304f759e468d49862df099af0; ?>
<?php unset($__attributesOriginal695fc28304f759e468d49862df099af0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal695fc28304f759e468d49862df099af0)): ?>
<?php $component = $__componentOriginal695fc28304f759e468d49862df099af0; ?>
<?php unset($__componentOriginal695fc28304f759e468d49862df099af0); ?>
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
                Eliminar Canción
            </h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h3 class="fw-bold">Estás seguro de que quieres eliminar <?php echo e($selectedSong->name); ?></h3>
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
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/song/songs.blade.php ENDPATH**/ ?>