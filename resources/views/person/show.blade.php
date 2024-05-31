@extends('layouts.app')

@section('template_title')
    {{ $person->name ?? __('Show') . " " . __('Person') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('people.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $person->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dpi:</strong>
                                    {{ $person->dpi }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $person->address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone:</strong>
                                    {{ $person->phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>History:</strong>
                                    {{ $person->history }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Note:</strong>
                                    {{ $person->note }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Person Type Id:</strong>
                                    {{ $person->person_type_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
