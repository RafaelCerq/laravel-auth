@extends('layouts.app')

@section('content')

    <!--=============================
    =            Gallery            =
    ==============================-->
    <section id="settings-form" class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                            <img src="{{asset('images/config-auth/config-auth-1.jpg')}}" class="img-fluid" alt="this is a title">
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="{{ route('users.index') }}">{{__('system.user_list')}}</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="300ms"
                        style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                            <img src="{{asset('images/config-auth/config-auth-2.jpg')}}" class="img-fluid" alt="this is a title">
                            <div class="overlay">
                                <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ route('roles.index') }}">{{__('system.role_list')}}</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="500ms"
                        style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                            <img src="{{asset('images/config-auth/config-auth-3.jpg')}}" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/config-auth/config-auth-3.jpg">{{__('system.permission_list')}}</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!--
    ==================================================
    Call To Action Section Start
    ================================================== -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">{{__('system.what_to_do_here')}}</h2>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">{{__('system.in_this_place_you')}}</p>
                        {{-- <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
