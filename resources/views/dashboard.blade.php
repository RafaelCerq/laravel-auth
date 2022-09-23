@extends('layouts.app')

@section('content')

    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">{{__('system.welcome')}}</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">{{__('system.your_main_dashboard')}}</p>
                        <a href="{{ route('modelo') }}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">{{__('system.theme_for_model')}}</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
