@extends('layout.app')

@section('content')

<div class="container">
  <h2>Users Table</h2>            
  <table class="table table-striped table-bordered">
    <thead class="bg-primary">
      <tr>
        <th>Id</th>
        <th>User</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->user}}</td>
        <td>{{$user->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection