<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Themefisher Icon font -->
        <link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Lightbox.min css -->
        <link rel="stylesheet" href="{{asset('plugins/lightbox2/css/lightbox.min.css')}}">
        <!-- animation css -->
        <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Main jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap4 -->
        <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- Parallax -->
        <script src="{{asset('plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
        <!-- lightbox -->
        <script src="{{asset('plugins/lightbox2/js/lightbox.min.js')}}"></script>
        <!-- Owl Carousel -->
        <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
        <!-- filter -->
        <script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
        <!-- Smooth Scroll js -->
        <script src="{{asset('plugins/smooth-scroll/smooth-scroll.min.js')}}"></script>
        <!-- Google Map -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script> --}}
        <script src="{{asset('plugins/google-map/gmap.js')}}"></script>

        <!-- Custom js -->
        <script src="js/script.js"></script>
    </body>
</html>
