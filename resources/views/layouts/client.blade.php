<!--
/**
   * @name:        Client layout
   * @author:      Zaid - Patrik - Henry
   * @description: Menu - Navbar of client role - client view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap core JavaScript -->
    <!--Navbar-->
    <link rel="stylesheet" href="{{ asset('css/navbar/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navbar/css/font-awesome.min.css')}}">
    <link href="{{ asset('fonts/forms/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/navbar/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navbar/css/responsive.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600" rel="stylesheet">

    <!-- Plugin JavaScript -->

    <!-- Custom JavaScript for this theme -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css" />
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169401240-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());



  gtag('config', 'UA-169401240-1');
</script>

    <title>WolPray</title>
</head>

<body class="container-fluid" data-spy="scroll" data-target="#mainNav" data-offset="70">
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu" id="mainNav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/client') }}"><img src="{{ asset('images/logos/wolpraylogo-navbar.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ url('/client') }}">INICIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#clubs">CLUBS</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">SOBRE NOSOTROS</a>
                                <li class="nav-item"><a class="nav-link" href="#contact">CONTACTO</a>
                                    <li class="nav-item submenu dropdown">
                                        @guest
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MI CUENTA</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                                        </ul>
                                        @else
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link {{ Request::is('dropdown/modifyclient') ? 'active' : null}}" href="{{ route('modifyclient') }}">{{ __('Modificar/Borrar') }}</a></li>
                                            <li class="nav-item"><a class="nav-link {{ Request::is('dropdown/listmyreservations') ? 'active' : null}}" href="{{ route('listmyreservations') }}">{{ __('Mis reservas') }}</a></li>
                                            <li class="nav-item"><a class="nav-link {{ Request::is('dropdown/listmybills') ? 'active' : null}}" href="{{ route('listmybills') }}">{{ __('Mis Pedidos') }}</a>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form></li>
                                        </ul>
                                        @endguest
                                    </li>
                                </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!--<main class="py-4">-->
        @yield('content')
    </main>
    <!--================Header Menu Area =================-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/navbar/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/navbar/popper.js') }}"></script>
    <script src="{{ asset('js/navbar/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/navbar/theme.js') }}"></script>
</html>
