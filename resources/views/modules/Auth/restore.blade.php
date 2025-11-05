@extends('layouts.logsign')

@section('content')
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

                <form action="{{ route('restore_validate') }}" id="restore">
                    @csrf

                    <x-forms.auth-forms type="email" name="email" placeholder="Email" required />

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

                    <a class="txt2" href="{{ route('sign') }}">
                        Regístrate
                    </a>
                </div>
                <div class="text-center p-t-30">
                    <span class="txt1">
                        Ya tienes una cuenta?
                    </span>

                    <a class="txt2" href="{{ route('login') }}">
                        Inicia Sesión
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    <script type="module" src="{{ asset('js/Auth/RestoreValidate.js') }}"></script>
@endsection
