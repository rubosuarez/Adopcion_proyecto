<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="{{asset('css/all.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
 footer{
   left:0px;
   margin-top:10px;
   bottom:0px;
   height:85px;
   width:100%;
}


    </style>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style type="text/css">
  
    #imagenes{border:2px solid }
    img {
        object-fit:cover;
       
        
      
    }
    #perros {width:50%;border:2px blue ;float:left;}
    
    #gatos {width:50%;border:2px blue;float:left;  }

     .gatos{ height: 400px;}

     h1{
         margin-left:25px;
         padding:25px;
     }
     h2{
         margin-left:25px;
         padding:25px;
     }
     p{
         margin-left:25px;
         padding:25px;
     }

     li{
         margin-left:25px;
         padding:25px;
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
 <br><br>
 <h1 style="font-size:25px; center"><strong>Política de cookies</strong></h1><br>
 <p style="font-size:25px">Le informamos que este sitio web instala cookies propias y de terceros al navegar sus páginas con el fin de facilitar su navegación y obtener datos estadísticos. Si continúa navegando consideramos que acepta su uso e instalación.</p><br>
<br><br>
<h2 style="font-size:25px"><strong>Definición y función de las cookies</strong></h2><br>
<h1 style="font-size:25px"><strong>¿Qué son las cookies?</strong></h1><br>
<p style="font-size:25px">Una cookie es un fichero de texto no ejecutable que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y<br>, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario. Las cookies también pueden ser utilizadas para registrar información anónima acerca de cómo un visitante utiliza un sitio. Por ejemplo, desde qué página Web ha accedido, o si ha utilizado un banner publicitario para llegar.</p><br>
<h1 style="font-size:25px"><strong>¿Por qué este sitio utiliza cookies?</strong></h1><br>
<p style="font-size:25px">Utiliza cookies estrictamente necesarias y esenciales para que usted utilice nuestro sitio Web y le permita moverse libremente, utilizar áreas privadas, opciones personalizadas, etc. Además, utiliza cookies que recogen datos relativos al análisis de uso de la Web. <br>Éstas se utilizan para ayudar a mejorar el servicio al visitante, midiendo el uso y el rendimiento de la página, para optimizarla y personalizarla.</p><br>
<h1 style="font-size:25px"><strong>¿Qué tipos de cookies utilizan esta página web?</strong></h1><br>
<h2 style="font-size:25px"><strong>Según su finalidad</strong></h2><br>
<ul style="font-size:25px">
    <li style="font-size:25px"><strong>Cookies técnicas:</strong> Las cookies técnicas son aquellas imprescindibles y estrictamente necesarias para el correcto funcionamiento de un portal Web y la utilización de las diferentes opciones y servicios que ofrece.
        Por ejemplo, las que sirven para el mantenimiento de la sesión, la gestión del tiempo de respuesta, rendimiento o validación de opciones, utilizar elementos de seguridad, compartir contenido con redes sociales, etc.</li><br>
    <li style="font-size:25px"><strong>Cookies de personalización:</strong> Estas cookies permiten al usuario especificar o personalizar algunas características de las opciones generales de la página Web.
        Por ejemplo, definir el idioma, configuración regional o tipo de navegador.</li><br>
    <li style="font-size:25px"><strong>Cookies de análisis (Google Analytics):</strong> Las cookies analíticas son las utilizadas por nuestro portal Web, para elaborar perfiles de navegación y poder conocer las preferencias de los usuarios del mismo con el fin de mejorar la oferta de productos y servicios.
        Por ejemplo, mediante una cookie analítica se controlarían las áreas geográficas de mayor interés de un usuario, cuál es el producto de más aceptación, etc.</li><br>
    <li style="font-size:25px"><strong>Cookies publicitarias / de publicidad comportamental (Google Adsense):</strong>  Las cookies publicitarias permiten la gestión de los espacios publicitarios en base a criterios concretos.
        Por ejemplo la frecuencia de acceso, el contenido editado, etc.<br><br>
        Las cookies de publicidad comportamental permiten a través de la gestión de la publicidad almacenar información del comportamiento a través de la observación de hábitos, estudiando los accesos y formando un perfil de preferencias del usuario, para ofrecerle publicidad relacionada con los intereses de su perfil.</li><br><br>
</ul>

<h1 style="font-size:25px"><strong>Según el plazo de tiempo que permanecen activadas:</strong></h1><br><br>
<ul>
    <li style="font-size:25px"><strong>Cookies de sesión: Las cookies de sesión son aquellas que duran el tiempo que el usuario está navegando por la página Web y se borran al término.</strong></li><br><br>
    <li style="font-size:25px"><strong>Cookies persistentes: Estas cookies quedan almacenadas en el terminal del usuario, por un tiempo más largo, facilitando así el control de las preferencias elegidas sin tener que repetir ciertos parámetros cada vez que se visite el sitio Web.</strong></li><br><br>
</ul>

<h1 style="font-size:25px"><strong>Revocación y eliminación de cookies</strong></h1><br><br>
<p style="font-size:25px">Puedes permitir, bloquear o eliminar las cookies instaladas en tu ordenador mediante la configuración de las opciones del navegador instalado en tu ordenador.</p>
    

    <footer class="mt-12">
<div class="max-w-full text-center bg-blue-900 text-white p-4">
    <div class="text-lg font-bold">Adopcion-Oviedo-asociacionoviedo@gmail.com <br> <i class="fas fa-envelope"></i> <a href="{{url('/contacta')}}">Contacta</a> - <a href="{{url('/privacidad')}}">Politica de privacidad</a> - <a href="{{url('/cookies')}}">Politica de cookies</a>   <!--<a class="hover:underline" href="https://prueba.com/" target="_blank">Ruben Suarez</a>--></div>
</div>
</footer> 

</div>
</body>
</html>