@extends('layouts.app')

@section('template_title')
    Buses
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Buses') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('buses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Name</th>
									<th >Registration</th>
									<th >Model</th>
									<th >Manufacturer</th>
									<th >Max Capacity</th>
									<th >Notification</th>
									<th >Route Time</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buses as $bus)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $bus->name }}</td>
										<td >{{ $bus->registration }}</td>
										<td >{{ $bus->model }}</td>
										<td >{{ $bus->manufacturer }}</td>
										<td >{{ $bus->max_capacity }}</td>
										<td >{{ $bus->notification }}</td>
										<td >{{ $bus->route_time }}</td>

                                            <td>
                                                <form action="{{ route('buses.destroy', $bus->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('buses.show', $bus->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('buses.edit', $bus->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $buses->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
