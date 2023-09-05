@extends('products.layout')
@section('title')
Create New Product
@endsection

@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">Create New Product</div>
    <div class="card-body">
        
    <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
      <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control-plaintext" id="name" name="name">
        </div>
      </div>
      <div class="form-group row">
            <label for="details" class="col-sm-2 col-form-label">Product Details</label>
        <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" id="details" name="details">
        </div>
      </div>
      <input type="submit" value="Save" class="btn btn-success">
</form>

    </div>
</div>

@stop