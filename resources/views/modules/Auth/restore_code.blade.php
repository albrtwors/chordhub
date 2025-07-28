@extends('layouts.logsign')

@section('content')
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

	            <form action="{{route('restore_code_validate')}}" id="emailform">
	                @csrf
	                <div class="wrap-input100 validate-input">

	                    <input class="input100" type="number" name="inputcode">

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

	                <a class="txt2" href="sign.php">
	                    Regístrate
	                </a>
	            </div>

	        </div>
	    </div>
	</div>

	<div id="dropDownSelect1"></div>

    <script type="module" src="{{asset('js/Auth/RestoreCode.js')}}"></script>
@endsection