@extends('layouts.app')

@section('content')

    <x-page :col="12" :namepage="trans('system.show_crud', ['page'=>$page2])">
        <x-alert :msg="session('msg')" :status="session('status')" />

        <x-breadcrumb :page="$page" :items="$breadcrumb ?? []" />

        <p>{{__('system.name')}}: {{$register->name}}</p>
        <p>{{__('system.description')}}: {{$register->description}}</p>

        @if($delete)
            <x-form :action="route($routeName.'.destroy',$register->id)" :method="'DELETE'">
                <button class="btn btn-danger btn-lg">@lang('system.delete')</button>
            </x-form>
        @endif
    </x-page>

@endsection
