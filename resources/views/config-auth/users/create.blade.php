@extends('layouts.app')

@section('content')

    @page_component(['col'=>12, 'page'=>__('system.create_crud',['page'=>$page_create])])

        @alert_component(['msg'=>session('msg'), 'status'=>session('status')])
        @endalert_component

        @breadcrumb_component(['page'=>$page, 'items'=>$breadcrumb ?? []])
        @endbreadcrumb_component



        @form_component(['action'=>route($routeName.".store"), 'method'=>"POST"])
            @include('config-auth.'.$routeName.'.form')
            <button class="btn btn-primary btn-md float-right">@lang('system.add')</button>
        @endform_component

    @endpage_component
@endsection
