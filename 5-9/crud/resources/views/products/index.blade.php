@extends('products.layout')
@section('title')
Home
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h1>All Products</h1>
                </div>
                <div class="card-body">
                    <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add Product">Add Product</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->details}}</td>
                                    <td><a href="{{ url('/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-info btn-sm">Edit</button></a></td>
                                    <td>
                                    <form action="{{ url('/product' . '/' . $product->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm('Conferm delete')">Delete</button>
                                    </form>
                                    </td>
                                    <!-- <a href="" title="Delete Product"><button class="btn btn-danger btn-sm">Delete</button></a> -->
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection