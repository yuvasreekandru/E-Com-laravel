@extends('master')
@section('content')
<div class="container pt-5 pb-5">
    <div class="row justify-content-md-center">
        <div class="col-sm-4 ">
  <form action="/register" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1"placeholder="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>

        </div>
    </div>
</div>
@endsection