<div>



    <div style="overflow-x:scroll" class="d-flex gap-3 mx-5 ">

       
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Tipo</label>
                <select class="form-control" wire:model.live="viewOption">
                    <option value="song">Cancion</option>
                    <option value="file">Cancionero</option>
                    <option value="chord">Acorde</option>
                </select>

            </div>
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Paginación</label>
                <select class="form-control" wire:model.live="quantity">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>

                
            </div>

            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">Nombre</label>
                <input type="text" class="form-control" wire:model.live="name" placeholder="Publicacion...">
            </div>
            
       

    </div>
    <div class="d-flex justify-content-center gap-5 mt-3">
        <?php echo e(count($posts) > 0 ? $posts->links(data: ['scrollTo' => false]) : ''); ?>


    </div>
    
    <div style="overflow-x:scroll; min-width:full;" class="mx-3">
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
                        Nombre
                        <!--[if BLOCK]><![endif]--><?php if($order == 'name'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                    </th>
                    <th wire:click="" style="cursor:pointer"
                        class="cursor-pointer bg-primary p-2 text-white">
                        Autor
                        <!--[if BLOCK]><![endif]--><?php if($order == 'email'): ?>
                            <!--[if BLOCK]><![endif]--><?php if($direction == 'desc'): ?>
                                <i class="ms-2 fas fa-sort-alpha-down-alt"></i>
                            <?php else: ?>
                                <i class="ms-2 fas fa-sort-alpha-up-alt"></i>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    </th>
                      <!--[if BLOCK]><![endif]--><?php if($viewOption!='song'&&$viewOption!='file'): ?>
                      <th class="bg-primary p-2 text-white">Canción</th>  
                      <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <th class="bg-primary p-2 text-white">Fecha</th>

                    <th class="bg-primary p-2 text-white">Opciones</th>
                </tr>
            </thead>


    </div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="p-3 <?php echo e($index%2==0?'bg-primary-subtle':'bg-white'); ?>" wire:key="<?php echo e($item->id); ?>">
            <td><?php echo e($item->id); ?></td>
            <td>

                <?php echo e($item->name); ?>

            </td>
            <td><?php echo e($item->user ? $item->user->name : 'null'); ?></td>
            <!--[if BLOCK]><![endif]--><?php if($viewOption!='song'&&$viewOption!='file'): ?>
                <td><?php echo e($item->song->name); ?></td>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <td><?php echo e($item->created_at); ?></td>

            <td>
                <a class="text-decoration-none" 
                href="<?php 
                    if($viewOption=='song'){
                        echo route('canciones.edit', $item->id);
                    }elseif($viewOption=='file'){   
                        echo route('cancioneros.edit', $item->id);
                    }else{
                        echo route('acordes.edit', $item->id);
                    }
                
                ?>
                
                ">
                    <button class="btn fs-50 btn-primary cargar-info">
                        Modificar
                    </button>
                </a>

               
                <button wire:click="handleDelete(<?php echo e($item->id); ?>)" class="btn fs-50 btn-danger">Eliminar
                </button>
               

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    




    </table>

    </div>
     <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['state' => ''.e($delete_modal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state' => ''.e($delete_modal).'']); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Eliminar <?php echo e($selectedPost->name); ?></h3>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <h4>Estás seguro de que quieres eliminar <b><?php echo e($selectedPost->name); ?></b></h4>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-danger" wire:click="$set('delete_modal', false)">Cerrar</button>
                <button class="btn btn-primary" wire:click="delete(<?php echo e($selectedPost->id); ?>)">Aceptar</button>
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
<?php endif; ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/livewire/admin/posts-table.blade.php ENDPATH**/ ?>