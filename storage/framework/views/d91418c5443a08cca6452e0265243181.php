
<?php $__env->startSection('content'); ?>

<div class="limiter">
    <div style="background-color: #ffff" class="container-login100">
        <div style="background-color:#fff" class="wrap-login100">

            <!--FORM DEL CÓDIGO  -->

            <span class="login100-form-title p-b-26">
                Código de verificación
            </span>

            <p class="p-b-26">
                Ingresa el código enviado a tu email
            </p>

            <form action="<?php echo e(route('sign_verify')); ?>" id="emailform">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="number" name="codeinput">

                    <span class="focus-input100" data-placeholder="Código"></span>
                </div>

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

        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<script type="module" src="<?php echo e(asset('js/Auth/SignCodeValidate.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logsign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Auth/sign_code.blade.php ENDPATH**/ ?>