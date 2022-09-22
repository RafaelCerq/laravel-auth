@extends('layouts.app')

@section('content')
    @page_component(['col'=>12, 'page'=>__('system.show_crud',['page'=>$page2])])

        @alert_component(['msg'=>session('msg'), 'status'=>session('status')])
        @endalert_component

        @breadcrumb_component(['page'=>$page,'items'=>$breadcrumb ?? []])
        @endbreadcrumb_component

        <p>{{__('system.name')}}: {{$register->name}}</p>
        <p>{{__('system.email')}}: {{$register->email}}</p>

        @if ($delete)
            @form_component(['action'=>route($routeName.".destroy",$register->id),'method'=>"DELETE"])
                <button class="btn btn-danger btn-lg">@lang('system.delete')</button>
            @endform_component
        @endif

    @endpage_component
@endsection
