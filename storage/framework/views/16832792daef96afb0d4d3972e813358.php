

<?php $__env->startSection('content'); ?>
    <div class="limiter">
        <div style="background-color:#fff " class="container-login100">
            <div class="wrap-login100">

                <!--FORM DEL LOGIN  -->

                <span class="login100-form-title p-b-26">
                    Bienvenido a Chordhub
                </span>

                <form action="<?php echo e(route('login_validate')); ?>" id="logform">
                    <?php echo csrf_field(); ?>

                    <!-- USERNAME -->
                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['type' => 'user','name' => 'name','placeholder' => 'Nombre de usuario']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'user','name' => 'name','placeholder' => 'Nombre de usuario']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['type' => 'password','required' => true,'placeholder' => 'Contraseña','class' => 'input100','name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','required' => true,'placeholder' => 'Contraseña','class' => 'input100','name' => 'password']); ?>
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


                    <!-- RESTORE PASS -->
                    <div class="text-center p-t-5 p-b-30">
                        <span class="txt1">
                            Olvidaste tu contraseña?
                        </span>

                        <a class="txt2" href="<?php echo e(route('restore')); ?>">
                            Inicia el proceso de recuperación
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button class="login100-form-btn" placeholder="Inicia Sesión" type="submit">
                                Inicia sesión
                            </button>
                        </div>
                    </div>

                </form>

                <div class="text-center p-t-50">
                    <span class="txt1">
                        No tienes una cuenta?
                    </span>

                    <a class="txt2" href="<?php echo e(route('sign')); ?>">
                        Regístrate
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <script type="module" src="<?php echo e(asset('js/Auth/LoginValidate.js')); ?>"></script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logsign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/Auth/login.blade.php ENDPATH**/ ?>