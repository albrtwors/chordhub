@extends('layouts.logsign')

@section('content')
    <x-react.vite-refresh path="resources/react/Auth/Sign/SignWidget.jsx" />

    <div class="limiter">
        <div style="background-color:#fff" class="container-login100">
            <div style="background-color:#fff" class="wrap-login100">

                <!--FORM DEL SIGN  -->
                <span class="login100-form-title p-b-26">
                    Regístrate
                </span>

                <form autocomplete="off" action="{{ route('sign_validate') }}" id="signform">

                    @csrf
                    @method('POST')
                    {{-- <div id="sign-widget"></div> --}}
                    <!-- EMAIL -->
                    <x-forms.auth-forms name="email" type="email" placeholder="Email" onfocus="completeHelper(this)"
                        data-validate="Tu email debe ser del tipo: a@b.c" required />

                    <!-- NAME -->
                    <x-forms.auth-forms
                        data-validate="El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras."
                        pattern="^[a-zA-Z][a-zA-Z0-9]{7,14}$" onfocus="completeHelper(this)" placeholder="Nombre de usuario"
                        required id="signFormName"
                        title="El nombre de usuario debe tener al menos 8 caracteres y solo letras, números o guiones bajos, además de comenzar con letras."
                        class="input100" type="user" name="name" />

                    <!-- PASSWORD -->

                    <x-forms.auth-forms class="input100" placeholder="Contraseña" type="password" name="password" required
                        pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
                        data-validate="Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números."
                        onfocus="completeHelper(this)"
                        title="Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números." required />

                    <x-forms.auth-forms placeholder="Confirmación de la contraseña" class="input100" type="password"
                        name="password_confirmation" required pattern="^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$"
                        data-validate="Debe tener 8-15 caracteres, al menos una mayúscula e incluir 3 o mas números."
                        onfocus="completeHelper(this)"
                        title="Debe tener 8-15 caracteres, al menos una mayúscula y 3 o mas números." required />

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

                    <a class="txt2" href="{{ route('login') }}">
                        Inicia Sesión
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
@endsection


<script type="module" src="{{ asset('js/Auth/SignValidate.js') }}"></script>
<script src="{{ asset('js/Auth/SignFormsHelper.js') }}"></script>
