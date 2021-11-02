@extends('layout.main')


@section('main_content')

<h1>Add New User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New User</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-md-6">

                {!! Form::open([ 'route' => 'users.store', 'method' => 'post']) !!}

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Group</label>
                        <div class="col-sm-10">
                            {{ Form::select('group', $groups, NULL, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'select group...'] ) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            {{ Form::text('name', NULL, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'user name...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            {{ Form::text('email', NULL, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'user email...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            {{ Form::text('phone', NULL, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'user phone...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            {{ Form::text('address', NULL, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'user address...']) }}
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection