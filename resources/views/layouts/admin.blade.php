<!--
/**
   * @name:        Admin layout
   * @author:      Zaid - Patrik - Henry
   * @description: Menu - Navbar of admin role - admin view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.zname', 'WolprayAdminMenu') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169401240-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());



      gtag('config', 'UA-169401240-1');
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 align="center"><img src="./images/logos/wolpraylogo.png" alt="" width="80" height="80"></h3>
                <strong><img src="../public/images/logos/wolpraylogo.png" alt="" width="50" height="50"></strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">

                    <a href="{{ url('admin') }}">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>

                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Admin
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="nav-item {{ Request::is('listadmin') && ! Request::is('admin/listadmin')? 'active' : ''}}">
                            <a href="{{url('/listadmin')}}">Listar admin</a>
                        </li>
                        <li class="nav-item {{ Request::is('addadmin') && ! Request::is('admin/addadmin')? 'active' : ''}}">
                            <a href="{{url('/addadmin')}}">Añadir admin</a>
                        </li>
                        <li class="nav-item {{ Request::is('deleteadmin') && ! Request::is('admin/deleteadmin')? 'active' : ''}}">
                            <a href="{{url('/deleteadmin')}}">Borrar admin</a>
                        </li>
                        <li class="nav-item {{ Request::is('profileadmin') && ! Request::is('manager/profileadmin')? 'active' : ''}}">
                                <a href="{{url('/profileadmin')}}">Ver mi perfil</a>
                        </li>
                        <li class="nav-item {{ Request::is('modifyadmin') && ! Request::is('manager/modifyadmin')? 'active' : ''}}">
                                <a href="{{url('/modifyadmin')}}">Modificar perfil</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Clientes
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li class="nav-item {{ Request::is('listusers') && ! Request::is('admin/listusers')? 'active' : ''}}">
                            <a href="{{url('/listusers')}}">Listar clientes</a>
                        </li>
                        <li class="nav-item {{ Request::is('deleteclient') && ! Request::is('admin/deleteclient')? 'active' : ''}}">
                            <a href="{{url('/deleteclient')}}">Borrar Cliente</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Managers
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li class="nav-item {{ Request::is('listmanagers') && ! Request::is('admin/listmanagers')? 'active' : ''}}">
                            <a href="{{url('/listmanagers')}}">Listar managers</a>
                        </li>
                        <li class="nav-item {{ Request::is('addmanager') && ! Request::is('admin/addmanager')? 'active' : ''}}">
                            <a href="{{url('/addmanager')}}">Añadir manager</a>
                        </li>
                        <li class="nav-item {{ Request::is('deletemanager') && ! Request::is('admin/deletemanager')? 'active' : ''}}">
                            <a href="{{url('/deletemanager')}}">Borrar manager</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Clubs
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li class="nav-item {{ Request::is('listclubs') && ! Request::is('admin/listclubs')? 'active' : ''}}">
                            <a href="{{url('/listclubs')}}">Listar clubs</a>
                        </li>
                        <li class="nav-item {{ Request::is('addclub') && ! Request::is('admin/addclub')? 'active' : ''}}">
                            <a href="{{url('/addclub')}}">Añadir club</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Facturas
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li class="nav-item {{ Request::is('listbills') && ! Request::is('admin/listbills')? 'active' : ''}}">
                            <a href="{{url('/listbills')}}">Listar facturas</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul  class="list-unstyled components">
                <i class="sign-out-alt"></i>
                @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>WP administación</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>


        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
