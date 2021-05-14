<h3><u>Welcome Admin,you may add,update and delete the order details</h3></u>
<h1>Order List</h1><br>

<a class="btn btn-dark" href="/list">GO BACK</a><br><br><br><br>
<table class="table" border="3">
<tr>
<td>Product Id</td>
<td>User Id</td>
<td>Status</td>
<td>Payment Method</td>
<td>Payment status</td>
<td>Address</td>
<td>DELETE</td>
<td>EDIT</td>
</tr>
@foreach($order as $order) 
<tr>
<td>{{$order['product_id']}}</td>
<td>{{$order['user_id']}}</td>
<td>{{$order['status']}}</td>
<td>{{$order['payment_method']}}</td>
<td>{{$order['payment_status']}}</td>
<td>{{$order['address']}}</td>

<td><button type="button" class="btn btn-warning"><a href={{ "delete/".$order['id']}} >DELETE</a></button></td>
<td><button type="button" class="btn btn-info"><a href={{ "edit1/".$order['id']}} >EDIT</a></button></td>
</tr>
@endforeach
</table>