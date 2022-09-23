<table class="table">
    <thead>
        <tr>
            @foreach ($columnList as $key => $value)
                <th scope="col">{{$value}}</th>
            @endforeach
            @if($routeName ?? false)
                <th scope="col">@lang('system.action')</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @php
            $count = 1;
        @endphp
        @foreach ($list as $key => $value)
            <tr>
                @foreach ($columnList as $key2 => $value2)
                    @if ($key2 == 'id')
                        <th scope="row">@php  echo $value->{$key2} @endphp</th>
                    @elseif($key2 == 'OrderAsc')
                        <td>@php  echo $count++ @endphp</td>
                    @else
                        <td>@php  echo $value->{$key2} @endphp</td>
                    @endif
                @endforeach
                @if($routeName ?? false)
                    <td>
                        <a href="{{route($routeName, $value->id)}}"><i style="color:black" class="material-icons">pageview</i></a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
