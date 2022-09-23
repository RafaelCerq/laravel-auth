@extends('layouts.app')

@section('content')

    <x-page :col="12" :namepage="trans('system.create_crud', ['page'=>$page_create])">
        <x-alert :msg="session('msg')" :status="session('status')" />

        <x-breadcrumb :page="$page" :items="$breadcrumb ?? []" />

        <x-form :action="route($routeName.'.store')" :method="'POST'">
            @include('config-auth.'.$routeName.'.form')
            <button class="btn btn-primary btn-md float-right">@lang('system.add')</button>
        </x-form>
    </x-page>

@endsection
