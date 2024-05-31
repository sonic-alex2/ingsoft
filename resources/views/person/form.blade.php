<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $person?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dpi" class="form-label">{{ __('Dpi') }}</label>
            <input type="text" name="dpi" class="form-control @error('dpi') is-invalid @enderror" value="{{ old('dpi', $person?->dpi) }}" id="dpi" placeholder="Dpi">
            {!! $errors->first('dpi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $person?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $person?->phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="history" class="form-label">{{ __('History') }}</label>
            <input type="text" name="history" class="form-control @error('history') is-invalid @enderror" value="{{ old('history', $person?->history) }}" id="history" placeholder="History">
            {!! $errors->first('history', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="note" class="form-label">{{ __('Note') }}</label>
            <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" value="{{ old('note', $person?->note) }}" id="note" placeholder="Note">
            {!! $errors->first('note', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        <div class="form-group mb-2 mb20">
            <label for="person_type_id" class="form-label">{{ __('Person Type') }}</label>
            <select name="person_type_id" class="form-control @error('person_type_id') is-invalid @enderror" id="person_type_id">
                <option value="">{{ __('Select Person Type') }}</option>
                @foreach($personTypes as $personType)
                    <option value="{{ $personType->id }}" {{ old('person_type_id', $person?->person_type_id) == $personType->id ? 'selected' : '' }}>
                        {{ $personType->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('person_type_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
