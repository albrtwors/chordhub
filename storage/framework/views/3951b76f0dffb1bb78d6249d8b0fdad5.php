<div>

    <div class="container">
        <div class="row">



            <div class="col-xl-6 col-md-10">

                <div class="d-flex justify-content-center my-3">
                    <form id="pfp" action="<?php echo e(route('app_change_pfp')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('form.image-form', ['userId' => Auth::user()->id, 'existingImageUrl' => isset(Auth::user()->image) ? Auth::user()->image->url : env('DEFAULT_PFP')]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1854701990-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        <input type="submit" class="btn btn-primary mt-3" value="Subir">
                    </form>

                </div>


                <div class="d-flex row justify-content-start mx-5">
                    <h4 class="text-start fw-bold">Cambiar Nombre de Usuario</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">
                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>

                <div class="d-flex row justify-content-start mx-5">

                    <h4 class="text-start fw-bold">Cambiar Contraseña</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <h4 class="text-start fw-bold">Repite la Contraseña</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>





            </div>

            <div class="d-flex flex-column gap-5 flex-auto col-xl-5  col-md-10 col-10 col-sm-10 ">

                <div class="user-card">
                    <h4 class="fw-bold">Datos del Usuario</h4>

                    <div class="d-flex justify-content-start align-items-start flex-column">
                        <h5 class=""><b>Creado el</b> <?php echo e(Auth::user()->created_at->format('d/m/Y')); ?></h5>
                        <h5 class=""><b>Email:</b> <?php echo e(Auth::user()->email); ?> </h5>
                        <h5 class=""><b>Roles actuales:</h5>
                        <ul>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = Auth::user()->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($role->name); ?> <?php if (isset($component)) { $__componentOriginalb4a230ae096cd8c2574b4972dbb596c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4a230ae096cd8c2574b4972dbb596c5 = $attributes; } ?>
<?php $component = App\View\Components\App\RoleEmote::resolve(['role' => ''.e($role->name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.role-emote'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\RoleEmote::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4a230ae096cd8c2574b4972dbb596c5)): ?>
<?php $attributes = $__attributesOriginalb4a230ae096cd8c2574b4972dbb596c5; ?>
<?php unset($__attributesOriginalb4a230ae096cd8c2574b4972dbb596c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4a230ae096cd8c2574b4972dbb596c5)): ?>
<?php $component = $__componentOriginalb4a230ae096cd8c2574b4972dbb596c5; ?>
<?php unset($__componentOriginalb4a230ae096cd8c2574b4972dbb596c5); ?>
<?php endif; ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </ul>
                        <img class="d-sm-none d-xl-block d-md-block d-sm-none d-none user-pfp-card" width="100px"
                            height="100px" src="<?php echo e(Auth::user()->image->url ?? env('DEFAULT_PFP')); ?>" alt="">
                    </div>

                </div>

                <div class="user-card">
                    <h4 class="fw-bold">Datos del Usuario</h4>

                    <div class="d-flex justify-content-start align-items-start flex-column">
                        <h5 class=""><b>Creado el</b> <?php echo e(Auth::user()->created_at->format('d/m/Y')); ?></h5>
                        <h5 class=""><b>Email:</b> <?php echo e(Auth::user()->email); ?> </h5>
                        <h5 class=""><b>Roles actuales:</h5>
                        <ul>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = Auth::user()->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($role->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </ul>
                        <img class="d-sm-none d-xl-block d-md-block d-sm-none d-none user-pfp-card" width="100px"
                            height="100px" src="<?php echo e(Auth::user()->image->url ?? env('DEFAULT_PFP')); ?>" alt="">
                    </div>

                </div>

            </div>


        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/app/user-profile.blade.php ENDPATH**/ ?>