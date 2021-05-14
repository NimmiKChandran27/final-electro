@extends('master')
@section("content")
<div class="search-box">
<div class="col-sm-6">

</div>
<div class="col=sm-4">
<div class="trending-wrapper">
<font size="7"
          face="Candara"
          color="black">
Results
</font>
<br><br><br>
<center>
@foreach($products as $item)
<div class="searched-item">
<a href="detail/{{$item['id']}}">
<img class="trending-image" src="{{$item['gallery']}}">
<div class="">
<font size="6"
          face="Candara"
          color="black">
<h2>{{$item['name']}}</h2>
<h5>{{$item['description']}}</h5>
</div>
</font>
</a>
</div>
@endforeach
</div>
</div>
</div>
</center>
@endsection