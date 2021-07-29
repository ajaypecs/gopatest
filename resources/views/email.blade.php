@extends('layout.app')

@section('content')

<div class="container">
  <h2>Users Table</h2>            
  <table class="table table-striped table-bordered">
    <thead class="bg-primary">
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Company</th>
      </tr>
    </thead>
    <tbody>
      @foreach($emails as $email)
      <tr>
        <td>{{$email->id}}</td>
        <td>{{$email->email}}</td>
        <td>{{$email->company}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection