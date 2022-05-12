@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($product as $detail)
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Details</th>
                    <th scope="col">Action</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$detail->name}}</td>
                    <td>{{$detail->detail}}</td>
                    <td><a href="product-delete/{{$detail->id}}">Delete</a></td>
                    <td><a href="product-view/{{$detail->id}}">View</a></td>
                  </tr>
                </tbody>
              </table>
            @endforeach
        </div>
    </div>
</div>
@endsection