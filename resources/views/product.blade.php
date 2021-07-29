@extends('layout.app')

@section('content')

<div class="container">
  <h2>Users Table</h2>            
  <table class="table table-striped table-bordered">
    <thead class="bg-primary">
      <tr>
        <th>Id</th>
        <th>Product Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection