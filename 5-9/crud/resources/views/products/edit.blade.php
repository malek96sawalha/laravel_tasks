@extends('products.layout')
@section('title')
Edit Product
@endsection

@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
    <form action="{{ url('product/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}">
      <div class="form-group row">

            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control-plaintext" id="name" name="name" value="{{$products->name}}">
        </div>
      </div>
      <div class="form-group row">
            <label for="details" class="col-sm-2 col-form-label">Product Details</label>
        <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" id="details" name="details" value="{{$products->details}}">
        </div>
      </div>
      <input type="submit" value="Save Changes" class="btn btn-success">
</form>
    </div>
</div>

@stop