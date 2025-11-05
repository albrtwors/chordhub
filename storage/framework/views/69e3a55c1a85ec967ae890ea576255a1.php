

<?php $__env->startSection("content"); ?>

<div class="limiter">
	<div style="background-color:#fff " class="container-login100">
		<div class="wrap-login100">
			
			<!--FORM DEL LOGIN  -->

			<span class="login100-form-title p-b-26">
				Bienvenido a Chordhub
			</span>

			<form action="<?php echo e(route("login_validate")); ?>" id="logform">
				<?php echo csrf_field(); ?>

				<!-- inputs -->
				<div class="wrap-input100 validate-input">
					<input required class="input100" type="text" name="name">

					<span class="focus-input100" data-placeholder="Nombre de usuario"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Por favor, introduce una contraseña">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input required class="input100" type="password" name="pass">
					<span class="focus-input100" data-placeholder="Contraseña"></span>
				</div>

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










<?php 

 $redirect = true;
 $redirectdir = "/chordhub";
 $idname = "logform";
 $route = "/logval";
//require "../public/js/asyncsend-auth.php";
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.logsign", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/Auth/login.blade.php ENDPATH**/ ?>