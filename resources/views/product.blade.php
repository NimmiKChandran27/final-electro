@extends('master')
@section("content")
<center>
<div class="custom-product">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://www.hellomagazine.com/imagenes/homes/20201127101670/best-black-friday-laptop-deals-online-discounts-2020/0-487-914/best-laptops-t.jpg">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://cdn.technadu.com/wp-content/uploads/2018/11/Black-Friday-Gaming-Laptop-Deals.jpg" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://fscl01.fonpit.de/userfiles/7695213/image/Smartphones-unter-200-Euro.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://m.economictimes.com/thumb/msid-71542529,width-1200,height-900,resizemode-4,imgsize-755415/from-the-newest-launches-to-best-selling-flagship-phones-the-premium-devices-are-on-heavy-discounts-.jpg" class="d-block w-100" alt="...">
      
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</a>
</div>
<br>
<marquee behavior="scroll" direction="left"><font size="10"
          face="Arial"
          color="blue">Get the latest and smartest laptops and mobile with greatest quality at affordable prices all under one roof!Register soon to witness the TRENDIEST sale online with flat 50% off for new customers!HURRY UP!!</font></marquee>
<br>

<div class="trending-wrapper">
<h3>TRENDING PRODUCTS</h3>
@foreach($products as $item)
<div class="trending-item">
<a href="detail/{{$item['id']}}">
<img class="trending-image" src="{{$item['gallery']}}">
<div class="">
<h3><font size="2"
          face="arial"
          color="black"><b>{{$item['name']}}</b></font></h3>
</div>
</a>
</div>
@endforeach
</div>
</div>
</center>
@endsection
