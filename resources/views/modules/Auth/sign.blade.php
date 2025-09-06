@extends('layouts.logsign')

@section('content')

<div class="limiter">
    <div style="background-color:#fff" class="container-login100">
        <div style="background-color:#fff" class="wrap-login100">

            <!--FORM DEL LOGIN  -->
            <span class="login100-form-title p-b-26">
                Regístrate
            </span>

            <form action="{{route('sign_validate')}}" id="signform">
                @csrf
                @method('POST')
                <div class="wrap-input100 validate-input position-relative" >
                    <!-- EMAIL -->
                    <input class="input100" onfocus="completeHelper(this)" data-validate="Tu email debe ser del tipo: a@b.c" name="email" required>
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>
                <!-- NAME -->
                <div class="wrap-input100 validate-input">
                    <input 
                    data-validate="El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras."
                        onfocus="completeHelper(this)"
                        required
                        id="signFormName"
                        title="El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras."
                        class="input100" type="text" name="name">
                    <span class="focus-input100" data-placeholder="Nombre de usuario"></span>
                </div>
                <!-- PASSWORD -->
                <div class="wrap-input100 validate-input" data-validate="Por favor, introduce una contraseña">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password"
                            required
	                        pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
                            data-validate="Debe tener 8-15 caracteres, al menos una mayúscula e incluir o mas números."
                            onfocus="completeHelper(this)"
	                        title="Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números." required> 
                    <span class="focus-input100" data-placeholder="Contraseña (Ej: Passwo039)"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Por favor, introduce una contraseña">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password_confirmation"
	                        pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
                            required
                            data-validate="Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números."
                            onfocus="completeHelper(this)"
	                        title="Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números." required
                            
                            >
                    <span class="focus-input100" data-placeholder="Repite la contraseña"></span>
                </div>

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

                <a class="txt2" href="{{route('login')}}">
                    Inicia Sesión
                </a>
            </div>

        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>


@endsection


<script type="module" src="{{asset('js/Auth/SignValidate.js')}}"></script>
<script src="{{asset('js/Auth/SignFormsHelper.js')}}"></script>

