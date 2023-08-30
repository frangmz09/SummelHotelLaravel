<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Summel Hotel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
 

    <!-- links -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/uniform/css/uniform.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/wow/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/gallery/blueimp-gallery.min.css')}}">
    <link rel="shortcut icon" href="{{asset('images/faviconn.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/faviconn.png')}}" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/contacto.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ingresar.css')}}">
    <link rel="stylesheet" href="{{asset('/css/registrarse.css')}}">
    <link rel="stylesheet" href="{{asset('/css/panel.css')}}">
    <link rel="stylesheet" href="{{asset('/css/create_edit.css')}}">


    <!-- Scripts -->
</head>
<body>
    <div id="app">

    <nav class="navbar  navbar-default" role="navigation">
    <div class="container">
    
    <div class="navbar-header" id="home">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('index') }}"><img src="{{asset('images/logoo.png')}}"  alt="Summel"></a>
    </div>

    
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="{{ route('index') }}">Hotel </a></li>
        <li><a href="{{ route('publicaciones.index') }}">Habitaciones</a></li>        
        <li><a href="{{ route('instalaciones') }}">Instalaciones</a></li>
        <li><a href="{{ route('ubicacion') }}">Ubicacion</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>

        @if(Auth::user() and Auth::user()->is_admin)
        <li><a href="{{ route('administrador.index') }}">Panel Administrador</a></li>
        @endif
        @guest


        @if (Route::has('login'))
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @endif
        @if (Route::has('register'))
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                          <li><a href="">Hola, {{ Auth::user()->name }}</a></li>


                          <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                          </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @endguest

                        
      </ul>
    </div>
  </div>
</nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('/images/logoo.png')}}" alt="" class="footer-logo">
                    <p>©Copyright Summel 2023</p>
                </div>
                <div class="col-md-4">
                    <div class="footer-redes">
                    <a href="https://www.instagram.com/"><img src="{{asset('images/photos/ig.png')}}" alt=""></a>
                    <a href="https://www.facebook.com/"><img src="{{asset('images/photos/fb.png')}}" alt=""></a>
                    <a href="https://twitter.com/"><img src="{{asset('images/photos/tw.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->

    <!--/.footer-bottom--> 
</footer>
<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
<script src="{{asset('assets/jquery.js')}}"></script>
<!-- wow script -->
<script src="{{asset('assets/wow/wow.min.js')}}"></script>
<!-- uniform -->
<script src="{{asset('assets/uniform/js/jquery.uniform.js')}}"></script>
<!-- boostrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
<!-- jquery mobile -->
<script src="{{asset('assets/mobile/touchSwipe.min.js')}}"></script>
<!-- jquery mobile -->
<script src="{{asset('assets/respond/respond.js')}}"></script>
<!-- gallery -->
<script src="{{asset('assets/gallery/jquery.blueimp-gallery.min.js')}}"></script>
<!-- custom script -->
<script src="{{asset('assets/script.js')}}"></script>

</body>
</html>
