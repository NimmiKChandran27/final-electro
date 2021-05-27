@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-6">
</div>
<div class="col=sm-4">
<div class="trending-wrapper">
<h4>Results for products</h4><br>
<a  class="btn btn-success" href="ordernow">Order Now</a>
<br><br>
@foreach($products as $item)
<div class="row searched-item cart-list-divider">
<div class="col-sm-4">
<div class="">
<font size="6"
          face="Candara"
          color="black">
<h2>{{$item->name}}</h2>
<h5>{{$item->productdescription}}</h5>
</font>
</div>
</div>
<div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" onclick="return confirm('Are you sure?')"> REMOVE FROM CART</a>
</div>
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="trending-image" src="{{$item->gallery}}">
</a>
</div>
</div>
@endforeach
</div>
<right>
<a  class="btn btn-success" >Order Now</a><br><br>
</div>
</div>
@endsection