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
<center>
<h3><u>Welcome Admin,you may add,update and delete the order details</h3></u>
<h1>Order List</h1><br>

<a class="btn btn-dark" href="/list">GO BACK</a><br><br><br><br>
<table class="table table-success table-striped">
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

<td><button type="button" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete!')"><a href={{ "delete1/".$order['id']}} >DELETE</a></button></td>
<td><button type="button" class="btn btn-info" ><a href={{ "edit1/".$order['id']}} >EDIT</a></button></td>
</tr>
@endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</center>
</html>
