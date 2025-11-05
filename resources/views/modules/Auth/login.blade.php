@extends('layouts.logsign')

@section('content')
    <div class="limiter">
        <div style="background-color:#fff " class="container-login100">
            <div class="wrap-login100">

                <!--FORM DEL LOGIN  -->

                <span class="login100-form-title p-b-26">
                    Bienvenido a Chordhub
                </span>

                <form action="{{ route('login_validate') }}" id="logform">
                    @csrf

                    <!-- USERNAME -->
                    <x-forms.auth-forms type="user" name="name" placeholder="Nombre de usuario" />

                    <!-- PASSWORD -->
                    <x-forms.auth-forms type="password" required placeholder="Contraseña" class="input100" type="password" name="password" />


                    <!-- RESTORE PASS -->
                    <div class="text-center p-t-5 p-b-30">
                        <span class="txt1">
                            Olvidaste tu contraseña?
                        </span>

                        <a class="txt2" href="{{ route('restore') }}">
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

                    <a class="txt2" href="{{ route('sign') }}">
                        Regístrate
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <script type="module" src="{{ asset('js/Auth/LoginValidate.js') }}"></script>

    </script>
@endsection
