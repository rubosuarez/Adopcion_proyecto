<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="login-brand">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100"
                             class="shadow-light">
                    </div>
                    @yield('content')
                    <div class="simple-footer">
{{--                        Copyright &copy; {{ getSettingValue('application_name') }}  {{ date('Y') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<!-- Page Specific JS File -->
</body>
</html>
<script>
    var nombre = document.getElementById("nombre")
    var email = document.getElementById("email")
    var contrasena = document.getElementById("contrasena")
    var confirm = document.getElementById("password_confirmation")

    nombre.oninvalid=function(){
    nombre.setCustomValidity("Nombre no valido al menos 3 caracteres");
    }
    nombre.oninput=function(){
    nombre.setCustomValidity("");
    }

    email.oninvalid=function(){
    email.setCustomValidity("Email no valido");
    }
    email.oninput=function(){
    email.setCustomValidity("");
    }

    contrasena.oninvalid=function(){
    contrasena.setCustomValidity("Contrasena no valido al menos 3 caracteres");
    }
    contrasena.oninput=function(){
    contrasena.setCustomValidity("");
    }

    confirm.onkeyup=(ev)=>{
           
           if(ev.target.value!== contrasena.value){
               contrasena.innerHTML="Las contraseñas no coinciden";
               ev.target.setCustomValidity("Las contraseñas deben de coincidir")
           }
           else{
               contrasena.innerHTML="";
               ev.target.setCustomValidity("");
           }
   }
</script>