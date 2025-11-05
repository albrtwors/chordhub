<div>
    <button class="btn btn-primary ms-5" wire:click="$set('state', true)">Crear usuario</button>
    <?php if (isset($component)) { $__componentOriginale6a555649da86b3de44465cdfe004aa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6a555649da86b3de44465cdfe004aa4 = $attributes; } ?>
<?php $component = App\View\Components\Modal::resolve(['state' => ''.e($state).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('head', null, []); ?> 
            <h3 class="fw-bold">Crear usuario</h3>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <div wire:loading.class="d-block" wire:target="imagen" class="d-none alert alert-primary">
                Cargando imagen
            </div>
            <!--[if BLOCK]><![endif]--><?php if($imagen): ?>
                <div wire:loading.hide wire:target="imagen" class="d-flex justify-content-center mb-3">
                    <img width="150px" height="150px" class="rounded-circle" src="<?php echo e($imagen->temporaryUrl()); ?>"
                        alt="">
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <span>Nombre del usuario</span>
            <input wire:model.defer="name" type="text" name="name" class="form-control">
            <span>Email</span>
            <input wire:model.defer="email" type="text" name="email" class="form-control">
            <span>Contraseña</span>
            <input wire:model.defer="password" type="text" name="password" class="form-control">
            <span>Foto de perfil</span>
            <input wire:model.defer="imagen" type="file" name="imagen" id="<?php echo e($random); ?>"
                class="form-control">
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 
            <div class="btn btn-danger" wire:click="setState()">Cerrar</div>
            <div class="btn btn-primary" wire:loading.class="opacity-25" wire:loading.attr="disabled"
                wire:target="save, imagen" wire:click="save()">Crear</div>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $attributes = $__attributesOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__attributesOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6a555649da86b3de44465cdfe004aa4)): ?>
<?php $component = $__componentOriginale6a555649da86b3de44465cdfe004aa4; ?>
<?php unset($__componentOriginale6a555649da86b3de44465cdfe004aa4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/admin/own-modal.blade.php ENDPATH**/ ?>