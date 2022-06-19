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

    <style type="text/css">
    #imagenes{border:2px solid }
    img {
        object-fit:cover;    
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
                       <a href="{{ url('/perros')}}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Perros") }}
                        </a> 
                    </div>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                    <i class="fas fa-cat"></i>
                        <a href="{{ url('/gatos')}}" class="text-lg font-semibold text-gray-100 no-underline">
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
                       <a href="{{ url('/contacta') }}" class="text-lg font-semibold text-gray-100 no-underline">
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
        
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" style=" margin-left:10%; text-align:center">
                    <div class="text-sm lg:flex-grow ml-3">
                    <a href="{{ url('donaciones') }}" class="text-lg font-semibold text-gray-100 no-underline">
                           <img src="images/paypal.png" style="object-fit:cover; width:50%">
                    </a>
        
                    </div>
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

    <footer class="footer mt-12">
<div class="max-w-full text-center bg-blue-900 text-white p-4">
    <div class="text-lg font-bold">Adopcion-Oviedo<!--<a class="hover:underline" href="https://prueba.com/" target="_blank">Ruben Suarez</a>--></div>
</div>
</footer> 

</div>
</body>
</html>
