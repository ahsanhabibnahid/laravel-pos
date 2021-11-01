@extends('layout.main')


@section('main_content')

<h1>Create New Group</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New Group</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <form method="POST" action="{{ url('groups') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">User Group Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="group title...">
                        <small id="emailHelp" class="form-text text-muted">title of user group</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection