@extends('master')
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<br><br><br><br><br><br>
<img class="detail-img" src="{{$product['gallery']}}">
</div>
<div class="col-sm-6">
<br><br>
<a class="btn btn-dark" href="/" role="button">GO BACK</a>
<br><br>
<font size="6"
          face="Candara"
          color="black"><b>
<h3>NAME:{{$product['name']}}</h3><br>
<h4>DESCRIPTION:{{$product['productdescription']}}</h4><br>
<h3>PRICE:{{$product['price']}}</h3><br>
<h3>OFFER PRICE:{{$product['offerprice']}}</h3><br>
<h3>DELIVERY:{{$product['delivery']}}</h3><br>
<h3>DELIVERY CHARGE:{{$product['deliverycharge']}}</h3><br>
<h3>TOTAL(INCLUSIVE OF ALL TAXES):{{$product['totalprice']}}</h3><br>
</b>
</font>
<br><br>
<form action="/add_to_cart" method="POST">
@csrf
<input type="hidden" name="product_id" value={{$product['id']}}>
<button class="btn btn-primary">ADD TO CART</button>
</form>
<br><br>
</div>
</div>

</div>
@endsection