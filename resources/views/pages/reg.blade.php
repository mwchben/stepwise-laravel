@extends('layouts.template')
@section('content')
<form class="row g-3">
@csrf
@method('PUT')

  <div class="col-md-6">
    <label for="inputFname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputFname">
  </div>
  <div class="col-md-6">
    <label for="inputLname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputLname">
  </div>      
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col-md-6">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="e.g. Ngong Rd...">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Register</button>
  </div>
</form>
@endsection