@extends('layout.main')


@section('main_content')

<div class="row clearfix mb-3">
    <div class="col-md-6">
        <h2>Products</h2>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> New Product</a>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Cost Price</th>
                        <th>Sale Price</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Cost Price</th>
                        <th>Sale Price</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->category->title }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->cost_price }}</td>
                        <td>{{ $product->price }}</td>
                        <td class="text-right">

                            <form method="POST" action="{{ route('products.destroy', ['product' =>$product->id]) }}">
                                <a class="btn btn-info btn-sm" href="{{ route('products.show', ['product'=>$product->id] )}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('products.edit', ['product'=>$product->id] )}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm" type="submit">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
