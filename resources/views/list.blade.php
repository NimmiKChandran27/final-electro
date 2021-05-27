<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h3><u>Welcome Admin,you may add,update and delete the product details</h3></u>
<h1>Product List</h1><br>


<a class="btn btn-outline-success" href="/add">ADD PRODUCT</a><br><br><br><br>
<a class="btn btn-outline-success" href="/editcustomer">EDIT ORDER DETAILS</a><br><br><br><br>
<a class="btn btn-outline-success" href="/logout">GO BACK</a><br><br><br><br>
<table class="table table-striped table-hover">
<tr>
<td><b>Product Id</b></td>
<td><b>Product Type</b></td>
<td><b>Name</b></td>
<td><b>Product Description</b></td>
<td><b>Stock</b></td>
<td><b>Price</b></td>
<td><b>Offer Price</b></td>
<td><b>Delivery</b></td>
<td><b>Delivery Charge</b></td>
<td><b>Total Price</b></td>
<td><b>Gallery</b></td>
<td><b>DELETE</b></td>
<td><b>EDIT</b></td>
</tr>
@foreach($products as $product) 
<tr>
<td>{{$product['id']}}</td>
<td>{{$product['prodtype']}}</td>
<td>{{$product['name']}}</td>
<td>{{$product['productdescription']}}</td>
<td>{{$product['stock']}}</td>
<td>{{$product['price']}}</td>
<td>{{$product['offerprice']}}</td>
<td>{{$product['delivery']}}</td>
<td>{{$product['deliverycharge']}}</td>
<td>{{$product['totalprice']}}</td>
<td>{{$product['gallery']}}</td>
<td><button type="button" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete!')"><a href={{ "delete/".$product['id']}} >DELETE</a></button></td>
<td><button type="button" class="btn btn-info"><a href={{ "edit/".$product['id']}} >EDIT</a></button></td>
</tr>
@endforeach
</table> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>

