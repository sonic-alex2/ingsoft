@extends('layouts.app')

@section('template_title')
    {{ $station->name ?? __('Show') . " " . __('Station') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Station</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('stations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Location:</strong>
                                    {{ $station->location }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $station->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Parking Slots:</strong>
                                    {{ $station->parking_slots }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Max People:</strong>
                                    {{ $station->max_people }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Person Id:</strong>
                                    {{ $station->person_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Access Id:</strong>
                                    {{ $station->access_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
