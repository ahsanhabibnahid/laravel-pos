@extends('layout.main')


@section('main_content')

    <div class="row clearfix mb-3">
        <div class="col-md-6">
            <a class="btn btn-info" href="{{ route('users.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-info" href="{{ url('/users/create') }}"> <i class="fa fa-plus"></i> New Sale</a>
            <a class="btn btn-info" href="{{ url('/users/create') }}"> <i class="fa fa-plus"></i> New Purchase</a>
            <a class="btn btn-info" href="{{ url('/users/create') }}"> <i class="fa fa-plus"></i> New Payment</a>
            <a class="btn btn-info" href="{{ url('/users/create') }}"> <i class="fa fa-plus"></i> New Receipt</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> {{ $user->name }} </h6>
        </div>
        <div class="card-body">

            <div class="row clearfix justify-content-md-center">
                <div class="col-md-8">.
                    <table class="table table-striped">
                        <tr>
                            <th>Group</th>
                            <td>{{ $user->group->title }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>




        </div>
    </div>


@endsection
