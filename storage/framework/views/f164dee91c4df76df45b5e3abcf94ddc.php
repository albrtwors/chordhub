

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginald5a15c6dbb425adf25438466fa335ada = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5a15c6dbb425adf25438466fa335ada = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.react.vite-refresh','data' => ['path' => 'resources/react/Auth/Sign/SignWidget.jsx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('react.vite-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['path' => 'resources/react/Auth/Sign/SignWidget.jsx']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $attributes = $__attributesOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__attributesOriginald5a15c6dbb425adf25438466fa335ada); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5a15c6dbb425adf25438466fa335ada)): ?>
<?php $component = $__componentOriginald5a15c6dbb425adf25438466fa335ada; ?>
<?php unset($__componentOriginald5a15c6dbb425adf25438466fa335ada); ?>
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
                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['name' => 'email','type' => 'email','placeholder' => 'Email','onfocus' => 'completeHelper(this)','dataValidate' => 'Tu email debe ser del tipo: a@b.c','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','type' => 'email','placeholder' => 'Email','onfocus' => 'completeHelper(this)','data-validate' => 'Tu email debe ser del tipo: a@b.c','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $attributes = $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $component = $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>

                    <!-- NAME -->
                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['dataValidate' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','pattern' => '^[a-zA-Z][a-zA-Z0-9]{7,14}$','onfocus' => 'completeHelper(this)','placeholder' => 'Nombre de usuario','required' => true,'id' => 'signFormName','title' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','class' => 'input100','type' => 'user','name' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-validate' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','pattern' => '^[a-zA-Z][a-zA-Z0-9]{7,14}$','onfocus' => 'completeHelper(this)','placeholder' => 'Nombre de usuario','required' => true,'id' => 'signFormName','title' => 'El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras.','class' => 'input100','type' => 'user','name' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $attributes = $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $component = $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>

                    <!-- PASSWORD -->

                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['class' => 'input100','placeholder' => 'Contraseña','type' => 'password','name' => 'password','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','dataValidate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'input100','placeholder' => 'Contraseña','type' => 'password','name' => 'password','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','data-validate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $attributes = $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $component = $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['placeholder' => 'Confirmación de la contraseña','class' => 'input100','type' => 'password','name' => 'password_confirmation','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','dataValidate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Confirmación de la contraseña','class' => 'input100','type' => 'password','name' => 'password_confirmation','required' => true,'pattern' => '^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$','data-validate' => 'Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números.','onfocus' => 'completeHelper(this)','title' => 'Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $attributes = $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef)): ?>
<?php $component = $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef; ?>
<?php unset($__componentOriginale7bfc258b2970d77d8a0e6759cf42fef); ?>
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

<?php echo $__env->make('layouts.logsign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Auth/sign.blade.php ENDPATH**/ ?>