@extends('master')
@section("content")



<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offest-4">
<form action="register" method="POST">
<fieldset>
  <legend>REGISTER</legend>
@csrf
  <div class="form-group">
    <label for="validationCustom02" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="validationCustom02" aria-describedby="emailHelp" placeholder="Email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
  </div>

  <div class="form-group">
    <label for="validationCustom02" class="form-label">User Name</label>
     <input type="text" name="name" class="form-control" id="validationCustom02" aria-describedby="emailHelp" placeholder="User Name" required>
    
  </div>
  <div class="mb-3">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Password" required>
  
  </div>
  <button type="submit" class="btn btn-primary">REGISTER</button><br>
  
 

 </fieldset>

</form>

</div>
</div>
</div>
@endsection