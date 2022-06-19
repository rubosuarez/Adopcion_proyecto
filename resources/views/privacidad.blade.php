<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="{{asset('css/all.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style type="text/css">


 footer{
   left:0px;
   margin-top:10px;
   bottom:0px;
   height:85px;
   width:100%;
}



  
  header{
      color: black;
      text-align: center;
      
  }

  p{
      margin-left:50px;
  }

    </style>

</head>
<body class="bg-gradient-to-r from-yellow-200 to-green-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
               <!-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
                -->
            </div>

            {{-- ADD THIS NAVIGATION OPTION --}}
            

            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow ml-3">
            <i class="fas fa-paw"></i>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ __('Inicio') }}
                </a>
                </div>
                </div>
               
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                    <i class="fas fa-dog"></i>
                       <a href="{{ url('/perros') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Perros") }}
                        </a> 
                    </div>
                </div>

                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                    <i class="fas fa-cat"></i>
                       <a href="{{ url('/gatos') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Gatos") }}
                        </a> 
                    </div>
                </div>

                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                    <i class="fas fa-blind" style="font-size:19px"></i>
                       <a href="{{ url('/adoptantes') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Adoptantes") }}
                        </a> 
                    </div>
                </div>

                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                    <i class="fas fa-phone-square-alt"></i>
                       <a href="{{ url('contacta') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Contacto") }}
                        </a> 
                    </div>
                </div>
               

         
            {{-- END NAVIGATION OPTION --}}

            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    <a href="{{ url('projects.index') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('Inicio') }}
                </a>
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    @if(session("success"))
        <div class="container mx-auto mt-5">
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">{{ __("Nuevo mensaje") }}</p>
                        <p class="text-sm">{{ session("success") }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container mx-auto px-4">
        @yield('content')
    </div>

      


    </div>
    


 </div>

<br><br>

<header>

<h1 class=" m-10 text-3xl center ">Política de privacidad</h1>

</header>

<div class="contenido_seccion">
<p style="text-align: justify; font-size: 22px; padding:20px;">
De conformidad con lo dispuesto en la Ley Orgánica 15/1999, de
13 de diciembre, de Protección de Datos de Carácter Personal, La Asociación
Protectora de Animales Más Que Chuchos, con CIF G74095035 le informa que sus<br>
datos han sido obtenidos legítimamente y se han incorporado a un fichero
automatizado titularidad de dicha entidad, que asume y tiene implantadas las
medidas de índole técnica,<br> organizativa y de seguridad que garantizan la 
confidencialidad e integridad de la información de conformidad con la
legislación vigente y cuya finalidad es permitir las relaciones con usted y 
el apadrinamiento/adopción de uno de nuestros animales en acogida, <br>no 
estando prevista la cesión de los datos que nos facilita a un tercero, salvo
que se le comunique este hecho expresamente en el momento de solicitarle los
datos, caso en el que se le informará de la entidad a la que se cederán los
datos y la finalidad de la cesión.<br> Los datos incorporados a este fichero
podrán ser utilizados por nosotros para mantenerle informado de nuestras
actividades.<br> La consecuencia de no suministrarnos los datos solicitados,
será la imposibilidad de prestarle el servicio demandado.<br> Sepa que tiene
reconocida la posibilidad de ejercitar gratuitamente los derechos de acceso,
rectificación, cancelación y oposición, en los términos previstos en la Ley
Orgánica 15/1999, mediante escrito dirigido a
asociacionAdopcion-Oviedo@gmail.com  </p>
<br><br><br><br>
<p align="center">
<img src="images/privacidad.png" alt="privacidad" class="privacidad" />
</p>
 
</div> 
</div>
    <footer class="mt-12">
<div class="max-w-full text-center bg-blue-900 text-white p-4">
<div class="text-lg font-bold">Adopcion-Oviedo-adopcionoviedo@gmail.com <br> <i class="fas fa-envelope"></i> <a href="{{url('/contacta')}}">Contacta</a> - <a href="{{url('/privacidad')}}">Politica de privacidad</a> - <a href="{{url('/cookies')}}">Politica de cookies</a>  <!--<a class="hover:underline" href="https://prueba.com/" target="_blank">Ruben Suarez</a>--></div>
</footer> 

</div>
</body>
</html>