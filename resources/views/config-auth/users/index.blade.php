@extends('layouts.app')

@section('content')

    {{-- @php
        $col='12';
        $namepage = trans('system.list', ['page'=>$page]);
    @endphp --}}
    <x-page :col="12" :namepage="trans('system.list', ['page'=>$page])">
        <x-alert :msg="session('msg')" :status="session('status')" />

        <x-breadcrumb :page="$page" :items="$breadcrumb ?? []" />

        <x-search :routeName="$routeName" :search="$search" />

        <x-table :columnList="$columnList" :list="$list" :routeName="$routeName" />

        <x-paginate :search="$search" :list="$list" />

    </x-page>

{{--
        @search_component(['routeName'=>$routeName, 'search'=>$search])
        @endsearch_component

        @table_component(['columnList'=>$columnList, 'list'=>$list, 'routeName'=>$routeName])
        @endtable_component

        @paginate_component(['search'=>$search, 'list'=>$list])
        @endpaginate_component --}}

@endsection
