<h3><u>Welcome Admin,you may add,update and delete the product details</h3></u>
<h1>Product List</h1><br>


<a class="btn btn-dark" href="/add">ADD PRODUCT</a><br><br><br><br>
<a class="btn btn-dark" href="/editcustomer">EDIT ORDER DETAILS</a><br><br><br><br>
<a class="btn btn-dark" href="/adminlogout">GO BACK</a><br><br><br><br>
<table class="table" border="3">
<tr>
<td>Product Id</td>
<td>Product Type</td>
<td>Name</td>
<td>Product Description</td>
<td>Stock</td>
<td>Price</td>
<td>Offer Price</td>
<td>Delivery</td>
<td>Delivery Charge</td>
<td>Total Price</td>
<td>Gallery</td>
<td>DELETE</td>
<td>EDIT</td>
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
<td><button type="button" class="btn btn-warning"><a href={{ "delete/".$product['id']}} >DELETE</a></button></td>
<td><button type="button" class="btn btn-info"><a href={{ "edit/".$product['id']}} >EDIT</a></button></td>
</tr>
@endforeach
</table>