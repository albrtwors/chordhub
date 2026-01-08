<?php $__env->startSection('content'); ?>
    <div class="limiter">
        <div style="background-color: #ffff" class="container-login100">
            <div style="background-color:#fff" class="wrap-login100">

                <!--FORM DEL CÓDIGO  -->
                
                <span class="login100-form-title p-b-26">
                    Recupera tu contraseña
                </span>

                <p class="p-b-26">
                    Ingresa la dirección de correo electrónico con la que vinculaste este usuario
                </p>

                <form action="<?php echo e(route('restore_validate')); ?>" id="restore">
                    <?php echo csrf_field(); ?>

                    <?php if (isset($component)) { $__componentOriginale7bfc258b2970d77d8a0e6759cf42fef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7bfc258b2970d77d8a0e6759cf42fef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.auth-forms','data' => ['type' => 'email','name' => 'email','placeholder' => 'Email','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.auth-forms'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','name' => 'email','placeholder' => 'Email','required' => true]); ?>
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

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button class="login100-form-btn" name="submitbut" placeholder="Inicia Sesión" type="submit">
                                Comprobar
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
    <script type="module" src="<?php echo e(asset('js/Auth/RestoreValidate.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logsign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/modules/Auth/restore.blade.php ENDPATH**/ ?>