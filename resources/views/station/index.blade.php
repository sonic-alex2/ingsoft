@extends('layouts.app')

@section('template_title')
    Stations
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Stations') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('stations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Location</th>
									<th >Name</th>
									<th >Parking Slots</th>
									<th >Max People</th>
									<th >Person Id</th>
									<th >Access Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stations as $station)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $station->location }}</td>
										<td >{{ $station->name }}</td>
										<td >{{ $station->parking_slots }}</td>
										<td >{{ $station->max_people }}</td>
										<td >{{ $station->person_id }}</td>
										<td >{{ $station->access_id }}</td>

                                            <td>
                                                <form action="{{ route('stations.destroy', $station->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('stations.show', $station->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('stations.edit', $station->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $stations->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
