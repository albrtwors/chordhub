

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal708114a696c97dee2a3fa6398d8005e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal708114a696c97dee2a3fa6398d8005e2 = $attributes; } ?>
<?php $component = App\View\Components\React\ViteRefresh::resolve(['path' => 'resources/react/Auth/Sign/SignWidget.jsx'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\React\ViteRefresh::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal708114a696c97dee2a3fa6398d8005e2)): ?>
<?php $attributes = $__attributesOriginal708114a696c97dee2a3fa6398d8005e2; ?>
<?php unset($__attributesOriginal708114a696c97dee2a3fa6398d8005e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal708114a696c97dee2a3fa6398d8005e2)): ?>
<?php $component = $__componentOriginal708114a696c97dee2a3fa6398d8005e2; ?>
<?php unset($__componentOriginal708114a696c97dee2a3fa6398d8005e2); ?>
<?php endif; ?>

    <div class="limiter">
        <div style="background-color:#fff" class="container-login100">
            <div style="background-color:#fff" class="wrap-login100">

                <!--FORM DEL SIGN  -->
                <span class="login100-form-title p-b-26">
                    Regístrate
                </span>

                <form autocomplete="off" action="<?php echo e(route('sign_validate')); ?>" id="signform">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    
                    <!-- EMAIL -->
                    <?php if (isset($component)) { $__componentOriginal9ea1224d88ae4835726f8fddd056fa21 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21 = $attributes; } ?>
<?php $component = App\View\Components\Forms\AuthForms::resolve(['type' => 'email','placeholder' => 'Email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\AuthForms::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','onfocus' => 'completeHelper(this)','data-validate' => 'Tu email debe ser del tipo: a@b.c','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $attributes = $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $component = $__componentOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>

                    <!-- NAME -->
                    <?php if (isset($component)) { $__componentOriginal9ea1224d88ae4835726f8fddd056fa21 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21 = $attributes; } ?>
<?php $component = App\View\Components\Forms\AuthForms::resolve(['placeholder' => 'Nombre de usuario','type' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\AuthForms::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-validate' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','pattern' => '^[a-zA-Z][a-zA-Z0-9]{7,14}$','onfocus' => 'completeHelper(this)','required' => true,'id' => 'signFormName','title' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','class' => 'input100','name' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $attributes = $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $component = $__componentOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>

                    <!-- PASSWORD -->

                    <?php if (isset($component)) { $__componentOriginal9ea1224d88ae4835726f8fddd056fa21 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21 = $attributes; } ?>
<?php $component = App\View\Components\Forms\AuthForms::resolve(['placeholder' => 'Contraseña','type' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\AuthForms::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'input100','name' => 'password','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','data-validate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $attributes = $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $component = $__componentOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal9ea1224d88ae4835726f8fddd056fa21 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21 = $attributes; } ?>
<?php $component = App\View\Components\Forms\AuthForms::resolve(['placeholder' => 'Confirmación de la contraseña','type' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\AuthForms::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'input100','name' => 'password_confirmation','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','data-validate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $attributes = $__attributesOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__attributesOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21)): ?>
<?php $component = $__componentOriginal9ea1224d88ae4835726f8fddd056fa21; ?>
<?php unset($__componentOriginal9ea1224d88ae4835726f8fddd056fa21); ?>
<?php endif; ?>

                    <div>


                        <div class="container-login100-form-btn p-t-20">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    Regístrate
                                </button>
                            </div>
                        </div>

                </form>

                <div class="text-center p-t-30">
                    <span class="txt1">
                        Ya tienes una cuenta?
                    </span>

                    <a class="txt2" href="<?php echo e(route('login')); ?>">
                        Inicia Sesión
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
<?php $__env->stopSection(); ?>


<script type="module" src="<?php echo e(asset('js/Auth/SignValidate.js')); ?>"></script>
<script src="<?php echo e(asset('js/Auth/SignFormsHelper.js')); ?>"></script>

<?php echo $__env->make('layouts.logsign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/Auth/sign.blade.php ENDPATH**/ ?>