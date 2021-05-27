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
<br>
<marquee behavior="scroll" direction="left"><font size="5"
          face="Arial"
          color="Black">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speaker" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 4.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
          
          Get the latest and smartest laptops and mobile with greatest quality at affordable prices all under one roof!Register soon to witness the TRENDIEST sale online with flat 50% off for new customers!HURRY UP!!</font>
          
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speaker" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 4.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
          
          </marquee>
<br>

<div class="trending-wrapper">
<h3>TRENDING PRODUCTS</h3>
@foreach($products as $item)
<div class="trending-item">
<a href="detail/{{$item['id']}}">
<span class="badge bg-warning text-dark">Latest</span>
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
