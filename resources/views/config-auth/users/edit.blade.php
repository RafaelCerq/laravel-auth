@extends('layouts.app')

@section('content')

    <x-page :col="12" :namepage="trans('system.edit_crud', ['page'=>$page2])">
        <x-alert :msg="session('msg')" :status="session('status')" />

        <x-breadcrumb :page="$page" :items="$breadcrumb ?? []" />

        <x-form :action="route($routeName.'.update',$register->id)" :method="'PUT'">
            @include('config-auth.'.$routeName.'.form')
            <button class="btn btn-primary btn-md float-right">@lang('system.edit')</button>
        </x-form>
    </x-page>

@endsection
