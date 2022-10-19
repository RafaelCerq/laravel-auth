<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('images/dev/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{asset('plugins/ionicons/ionicons.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('plugins/animate-css/animate.css')}}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{asset('plugins/slider/slider.css')}}">
        <!-- slick slider -->
        <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{asset('plugins/facncybox/jquery.fancybox.css')}}">
        <!-- hover -->
        <link rel="stylesheet" href="{{asset('plugins/hover/hover-min.css')}}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <header class="navigation fixed-top">
            @include('layouts.navigation')
        </header>

        <div class="container-fluid">

            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link @if($activePage == 'dashboard') active @endif" href="{{ route('dashboard') }}">
                                    <i class="fa-solid fa-house"></i>  {{ __('system.dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($activePage == 'settings') active @endif" href="{{ route('settings') }}">
                                    <i class="fa-solid fa-gears"></i>  {{ __('system.settings') }}
                                </a>
                            </li>
                            <li class="nav-item sub-collapse">
                                <a class="nav-link" data-toggle="collapse" @if($activeButton =='settings') aria-expanded="true" @endif href="#configuracoesAuth">
                                    <i class="fa-solid fa-gears"></i>  {{ __('system.settings') }}
                                    <i class="fa-solid fa-caret-left arrow"></i>
                                </a>
                                <div class="div-nav-sub collapse @if($activeButton =='settings') show @endif" id="configuracoesAuth">
                                    <ul class="nav-sub">
                                        <li class="nav-item">
                                            <a class="nav-link @if($activePage == 'user') active @endif" href="{{ route('users.index') }}">
                                                <i class="fa-solid fa-user-group"></i>
                                                {{ __("system.user") }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if($activePage == 'permission') active @endif" href="{{ route('permissions.index') }}">
                                                <i class="fa-solid fa-file-lines"></i>
                                                {{ __("system.permission") }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if($activePage == 'role') active @endif" href="{{ route('roles.index') }}">
                                                <i class="fa-solid fa-lock"></i>
                                                {{ __("system.role") }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-file"></i> Pedidos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Produtos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-user-group"></i>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Relatórios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-layer-group"></i>
                                    Integrações
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>


                <main class="col-md-10 ml-sm-auto col-lg-10 px-4">
                    @yield('content')
                </main>
            </div>
        </div>

        <!--
        ==================================================
        Footer Section Start
        ================================================== -->
        <footer id="footer">
            <div class="container">
                <div class="row content-justify-between">
                    <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                        <p class="copyright">Copyright: Design and Developed by <a href="#" target="_blank">Space Web Sistemas</a>.
                            {{-- <br>Get More Bootstrap Template From Our
                            <a href="#" target="_blank">Store</a> --}}
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <!-- Social Media -->
                        <ul class="social text-center text-md-right text-lg-right">
                            <li>
                                <a href="#" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer> <!-- /#footer -->

        <!-- Template Javascript Files
        ================================================== -->
        <!-- jquery -->
        <script src="{{asset('plugins/jQurey/jquery.min.js')}}"></script>
        <!-- Form Validation -->
        <script src="{{asset('plugins/form-validation/jquery.form.js')}}"></script>
        <script src="{{asset('plugins/form-validation/jquery.validate.min.js')}}"></script>
        <!-- slick slider -->
        <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('plugins/wow-js/wow.min.js')}}"></script>
        <!-- slider js -->
        <script src="{{asset('plugins/slider/slider.js')}}"></script>
        <!-- Fancybox -->
        <script src="{{asset('plugins/facncybox/jquery.fancybox.js')}}"></script>
        <!-- template main js -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
