@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offest-4">
<form action="/login" method="POST">

  <div class="form-group">
  @csrf
    <label for="validationCustom01" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="demo@gmail.com" aria-describedby="emailHelp"required > 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="mb-3">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="*********" required >
    <span>@error('password'){{$message}}@enderror</span>
  </div>
  <button type="submit" class="btn btn-primary">LOGIN</button><br>
  <a href="/register">Don't have a account? Sign up!</label></a><br>
  <a href="/adminlogin">If  only <i>ADMINISTRATOR<i> click here!</label></a>
</form>
</div>
</div>
</div>

@endsection
