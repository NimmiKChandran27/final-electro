@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-10">
<table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
       
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$1000</td>
        
      </tr>
      <tr>
        <td>TOTAL AMOUNT:</td>
        <td>$ {{$total+1000}}</td>
        
      </tr>
    </tbody>
  </table>

  

  <div>
  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address" id="validationCustom01" placeholder="enter your address" class="form-control" id="validationCustom01" value="enter your address" required ></textarea>
  </div>
  <br>
  <div class="form-group">
    <label for="pwd">Payment Method</label>
    <br><br>
    <input type="radio" value="cash" id="validationCustom01" name="payment" required><span> Online Payment</span><br><br>
    <input type="radio"  value="cash" id="validationCustom01" name="payment" required><span>EMI Payment</span><br><br>
    <input type="radio" value="cash" id="validationCustom01" name="payment" required><span>Payment on delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-success" 
  >ORDER NOW</button>
</form> 
<br>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>

  </div>
</div>
</div>



</div>
@endsection