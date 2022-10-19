@extends('layouts.app', ['activePage' => 'role', 'activeButton' => 'settings'])

@section('content')

    <x-page :col="12" :namepage="trans('system.list', ['page'=>$page])">
        <x-alert :msg="session('msg')" :status="session('status')" />

        <x-breadcrumb :page="$page" :items="$breadcrumb ?? []" />

        <x-search :routeName="$routeName" :search="$search" />

        <x-table :columnList="$columnList" :list="$list" :routeName="$routeName" />

        <x-paginate :search="$search" :list="$list" />

    </x-page>
@endsection
