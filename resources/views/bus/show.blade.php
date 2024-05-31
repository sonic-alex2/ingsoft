@extends('layouts.app')

@section('template_title')
    {{ $bus->name ?? __('Show') . " " . __('Bus') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('buses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $bus->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registration:</strong>
                                    {{ $bus->registration }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Model:</strong>
                                    {{ $bus->model }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Manufacturer:</strong>
                                    {{ $bus->manufacturer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Max Capacity:</strong>
                                    {{ $bus->max_capacity }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notification:</strong>
                                    {{ $bus->notification }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Route Time:</strong>
                                    {{ $bus->route_time }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
