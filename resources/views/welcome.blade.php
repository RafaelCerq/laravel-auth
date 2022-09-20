<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

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
    <body class="antialiased" id="body">

        <!-- Start Preloader
        ==================================== -->
        <div id="preloader">
            <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div>
        <!--
        End Preloader
        ==================================== -->

        <header class="navigation fixed-top">
            @include('layouts.navigation')
        </header>

        <div class="hero-slider">
            <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Crafting Digital <br>
                                Experience</h1>
                            <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
                                officia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
                            <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                                href="service.html">Explore Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We Combine Design <br> and
                                Creativity</h1>
                            <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
                                for your Perfect Website. Choose from a wide range
                                <br> of Elements & simply put them on our Canvas.</p>
                            <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                                href="service.html">Explore Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--
        Start About Section
        ==================================== -->
        {{-- <section class="service-2 section">
            <div class="container">
                <div class="row justify-content-center">

                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="title text-center">
                    <h2>What Do We Offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>
                </div>
                <div class="row">

                <div class="col-md-4 text-center d-none d-md-block">
                    <img loading="lazy" src="images/about/member.jpg" class="img-fluid inline-block" alt="">
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                        <i class="tf-ion-ios-alarm-outline"></i>
                        <h4>Time Management</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                        <i class="tf-ion-ios-briefcase-outline"></i>
                        <h4>Marketing Ideas</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                        <i class="tf-ion-ios-email-outline"></i>
                        <h4>Mail Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                        <i class="tf-ion-ios-locked-outline"></i>
                        <h4>Secure System</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    </div>
                </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </section>  --}}
        <!-- End section -->

        <!-- Start About Section
        ==================================== -->
        {{-- <section class="about-2 section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- section title -->
                    <div class="col-lg-6">
                        <div class="title text-center">
                            <h2>We Are Bingo Agency</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,
                                aut, eum itaque illo totam tempora eius.</p>
                            <div class="border"></div>
                        </div>
                    </div>
                    <!-- /section title -->
                </div>

                <div class="row">

                    <div class="col-md-6 mb-4 mb-md-0">
                        <img loading="lazy" src="images/about/about-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <ul class="checklist">
                            <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                            <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                            <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                            <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                            <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                        </ul>
                        <a href="about.html" class="btn btn-main mt-20">Learn More</a>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </section>  --}}
        <!-- End section -->

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
