<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $bus?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registration" class="form-label">{{ __('Placa') }}</label>
            <input type="text" name="registration" class="form-control @error('registration') is-invalid @enderror" value="{{ old('registration', $bus?->registration) }}" id="registration" placeholder="Placa">
            {!! $errors->first('registration', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="model" class="form-label">{{ __('Model') }}</label>
            <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model', $bus?->model) }}" id="model" placeholder="Model">
            {!! $errors->first('model', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="manufacturer" class="form-label">{{ __('Manufacturer') }}</label>
            <input type="text" name="manufacturer" class="form-control @error('manufacturer') is-invalid @enderror" value="{{ old('manufacturer', $bus?->manufacturer) }}" id="manufacturer" placeholder="Manufacturer">
            {!! $errors->first('manufacturer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="max_capacity" class="form-label">{{ __('Max Capacity') }}</label>
            <input type="number" name="max_capacity" class="form-control @error('max_capacity') is-invalid @enderror" value="{{ old('max_capacity', $bus?->max_capacity) }}" id="max_capacity" placeholder="Max Capacity">
            {!! $errors->first('max_capacity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notification" class="form-label">{{ __('Notification') }}</label>
            <select name="notification" class="form-control @error('notification') is-invalid @enderror" id="notification">
                <option value="">Select</option>
                <option value="1" {{ old('notification', $bus?->notification) == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('notification', $bus?->notification) == 0 ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('notification', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="route_time" class="form-label">{{ __('Route Time') }}</label>
            <input type="time" name="route_time" class="form-control @error('route_time') is-invalid @enderror" value="{{ old('route_time', $bus?->route_time) }}" id="route_time" placeholder="Route Time">
            {!! $errors->first('route_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
