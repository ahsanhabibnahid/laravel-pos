@extends('layout.main')


@section('main_content')

    <div class="row clearfix mb-3">
        <div class="col-md-6">
            <a class="btn btn-info" href="{{ route('products.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> {{ $product->title }} information </h6>
        </div>
        <div class="card-body">

            <div class="row clearfix justify-content-md-center">
                <div class="col-md-12">.
                    <table class="table table-striped">
                        <tr>
                            <th>Category</th>
                            <td>{{ $product->category->title }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $product->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Cost Price</th>
                            <td>{{ $product->cost_price }}</td>
                        </tr>
                        <tr>
                            <th>Sale Price</th>
                            <td>{{ $product->price }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection
