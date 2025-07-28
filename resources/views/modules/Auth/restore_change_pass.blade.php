@extends('layouts.logsign')

@section('content')
	<div class="limiter">
	    <div style="background-color: #ffff" class="container-login100">
	        <div style="background-color:#fff" class="wrap-login100">

	            <!--FORM DEL CÓDIGO  -->

	            <span class="login100-form-title p-b-26">
	                Cambia tu contraseña
	            </span>

	            <p class="p-b-26">
	                Asegúrate de recordar tú nueva contraseña
	            </p>

	            <form action="{{route("restore_change_validate")}}" id="changepass">
	                @csrf
                    @method('POST')
	                <div class="wrap-input100 validate-input">
	                    <input class="input100" type="password" name="pass"
	                        pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
	                        title="Debe tener 8-15 caracteres, al menos una mayúscula y exactamente 3 números." required>

	                    <span class="focus-input100" data-placeholder="Contraseña"></span>
	                </div>
	                <div class="wrap-input100 validate-input">
	                    <input class="input100" type="password" name="repass"
	                        pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
	                        title="Debe tener 8-15 caracteres, al menos una mayúscula y exactamente 3 números." required>

	                    <span class="focus-input100" data-placeholder="Repite la contraseña"></span>
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

    <script type="module" src="{{asset('js/Auth/ChangePass.js')}}"></script>
	<div id="dropDownSelect1"></div>


@endsection