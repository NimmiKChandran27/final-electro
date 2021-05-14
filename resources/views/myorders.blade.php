@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-6">

</div>
<div class="col=sm-4">
<div class="trending-wrapper">
<font size="7"
          face="Candara"
          color="black">
My Orders<br>
<br>
</font>
@foreach($orders as $item)
<div class="row searched-item cart-list-divider">
<div class="col-sm-4">
<div class="">
<font size="7"
          face="Courier New"
          color="black">
<h2>Name: {{$item->name}}</h2>
<h5>Delivery Status: {{$item->status}}</h5>
<h5>Address:  {{$item->address}}</h5>
<h5>Payment Status: {{$item->payment_status}}</h5>
<h5>Payment Method: {{$item->payment_method}}</h5>
</font>
</div>
</div>

<div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="trending-image" src="{{$item->gallery}}">
</a>
</div>
</div>
@endforeach
</div>

</div>
</div>
@endsection