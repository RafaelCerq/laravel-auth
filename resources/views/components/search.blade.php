<form class="form-inline" method="GET" action="{{route($routeName.'.index')}}">
    <div class="form-group mb-2">
        @can ('create-user')
            <a href="{{route($routeName.'.create')}}">@lang('system.add')</a>
        @endcan
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <input type="search" class="form-control" name="search" placeholder="@lang('system.search')" value="{{$search}}">
    </div>
    <button type="submit" class="btn btn-primary mb-2">@lang('system.search')</button>
    <a class="btn btn-warning mb-2" href="{{route($routeName.'.index')}}">@lang('system.clean')</a>
</form>
