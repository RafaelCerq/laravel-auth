<div class="row">
    <div class="form-group col-6">
        <label for="name">{{ __('system.name') }}</label>
        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? ($register->name ?? '') }}">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-6">
        <label for="description">{{ __('system.description') }}</label>
        <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') ?? ($register->description ?? '') }}">
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-6">
        <label for="permissions">{{ __('system.permission') }}</label>
        <select class="form-control" multiple name="permissions[]">
            @foreach ($permissions as $key => $value)
                @php
                $select = '';
                if(old('permissions') ?? false) {
                    foreach (old('permissions') as $key => $id) {
                        if($id == $value->id){
                            $select = "selected";
                        }
                    }
                } else {
                    if($register ?? false){
                        foreach ($register->permissions as $key => $permission) {
                            if($permission->id == $value->id){
                                $select = "selected";
                            }
                        }
                    }
                }
                @endphp

            <option {{$select}} value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
    </div>
</div>
