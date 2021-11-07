@extends('layout.main')


@section('main_content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <h2>{{ $headline }}</h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $headline }}</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-8">

                    {{-- @if (isset($category)) --}}
                    @if ($mode == 'edit')

                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put']) !!}

                    @else

                        {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}

                    @endif

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'title...']) }}
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
