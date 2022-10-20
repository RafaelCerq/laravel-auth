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

            @guest
                <main class="py-4">
                    @yield('content')
                </main>
                @else
                    <div class="row">
                        @include('layouts.sidebar')
                    </div>

                    <main class="col-md-10 ml-sm-auto col-lg-10 py-4">
                        @yield('content')
                    </main>
            @endguest

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
