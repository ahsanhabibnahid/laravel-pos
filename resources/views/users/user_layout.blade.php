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

    <div class="row mt-5">
        <div class="col-2">
            <div class="nav flex-column nav-pills">
                <a class="nav-link @if ($tab_menu == 'user_info') active @endif" href="{{ route('users.show', $user->id) }}">User Info</a>
                <a class="nav-link @if ($tab_menu == 'sales') active @endif" href="{{ route('user.sales', $user->id) }}">Sale</a>
                <a class="nav-link" href="">Purchase</a>
                <a class="nav-link" href="">Payment</a>
                <a class="nav-link" href="">Receipt</a>
            </div>
        </div>
        <div class="col-10">

            @yield('user_content')

        </div>
    </div>
@endsection
