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
                <div class="col-md-10">

                    {{-- @if (isset($product)) --}}
                    @if ($mode == 'edit')

                        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put']) !!}

                    @else

                        {!! Form::open(['route' => 'products.store', 'method' => 'post']) !!}

                    @endif

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 text-right col-form-label">Title <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'product title...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 text-right col-form-label">Description <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'product description...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-2 text-right col-form-label">Category <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-5">
                            {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'id' => 'category', 'placeholder' => 'select category...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cost_price" class="col-sm-2 text-right col-form-label">Cost Price</label>
                        <div class="col-sm-5">
                            {{ Form::text('cost_price', null, ['class' => 'form-control', 'id' => 'cost_price', 'placeholder' => 'cost price...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 text-right col-form-label">Sale Price</label>
                        <div class="col-sm-5">
                            {{ Form::text('price', null, ['class' => 'form-control', 'id' => 'price', 'placeholder' => 'sale price...']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 text-right col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </div>


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection
