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
<h1>EDIT PRODUCT DETAILS</h1>
<form action="/edit1" method="POST">
@csrf
<input type="hidden" name="id" value="{{$order['id']}}"><br><br>
<label for=""  class="label" >PRODUCT ID:{{$order['product_id']}}</label><br><br>
<label for="" class="label">USER ID:{{$order['user_id']}}</label><br><br>
<input type="text" id="validationCustom01" name="status" value="{{$order['status']}}" placeholder="STATUS" required><br><br>
<label for="" class="label">PAYMENT METHOD:{{$order['payment_method']}}</label><br><br>
<input type="text" name="pstatus" id="validationCustom01" value="{{$order['payment_status']}}" placeholder="PAYMENT STATUS" required><br><br>

<button type="submitt" button class="btn btn-primary" onclick="return confirm('Data Reset!')">RESET</button>
</form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</center>
</html>

