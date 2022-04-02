@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/insert-product" method="POST">
                @csrf
                <div class="form-group">
                  <label for="product_name">Product Name</label>
                  <input type="text" name = "name" class="form-control" id="product_name" aria-describedby="product_name" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label for="product_detail">Product Detail</label>
                  <input type="text" class="form-control" name = "detail" id="product_detail" placeholder="Enter Product Detail">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection