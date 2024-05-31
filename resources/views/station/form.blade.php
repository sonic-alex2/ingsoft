<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="location" class="form-label">{{ __('Location') }}</label>
            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location', $station?->location) }}" id="location" placeholder="Location">
            {!! $errors->first('location', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $station?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="parking_slots" class="form-label">{{ __('Parking Slots') }}</label>
            <input type="number" name="parking_slots" class="form-control @error('parking_slots') is-invalid @enderror" value="{{ old('parking_slots', $station?->parking_slots) }}" id="parking_slots" placeholder="Parking Slots">
            {!! $errors->first('parking_slots', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="max_people" class="form-label">{{ __('Max People') }}</label>
            <input type="number" name="max_people" class="form-control @error('max_people') is-invalid @enderror" value="{{ old('max_people', $station?->max_people) }}" id="max_people" placeholder="Max People">
            {!! $errors->first('max_people', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="person_id" class="form-label">{{ __('Person Id') }}</label>
            <select name="person_id" class="form-control @error('person_id') is-invalid @enderror" id="person_id">
                <option value="" disabled selected>Select a person</option>
                @foreach($people as $person)
                    <option value="{{ $person->id }}" {{ old('person_id', $station?->person_id) == $person->id ? 'selected' : '' }}>
                        {{ $person->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('person_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="access_id" class="form-label">{{ __('Access Id') }}</label>
            <select name="access_id" class="form-control @error('access_id') is-invalid @enderror" id="access_id">
                <option value="" disabled selected>Select an access</option>
                @foreach($accesses as $access)
                    <option value="{{ $access->id }}" {{ old('access_id', $station?->access_id) == $access->id ? 'selected' : '' }}>
                        {{ $access->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('access_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
