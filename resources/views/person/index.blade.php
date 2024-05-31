@extends('layouts.app')

@section('template_title')
    People
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('People') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('people.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Dpi</th>
									<th >Address</th>
									<th >Phone</th>
									<th >History</th>
									<th >Note</th>
									<th >Person Type Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($people as $person)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $person->name }}</td>
										<td >{{ $person->dpi }}</td>
										<td >{{ $person->address }}</td>
										<td >{{ $person->phone }}</td>
										<td >{{ $person->history }}</td>
										<td >{{ $person->note }}</td>
										<td >{{ $person->person_type_id }}</td>

                                            <td>
                                                <form action="{{ route('people.destroy', $person->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('people.show', $person->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('people.edit', $person->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $people->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
