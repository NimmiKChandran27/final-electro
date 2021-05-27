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
<form action="/edit" method="POST">
@csrf
<input type="hidden" id="validationCustom01" name="id" value="{{$products['id']}}" required><br><br>
<input type="text" id="validationCustom01"  name="ptype" value="{{$products['prodtype']}}" placeholder="PRODUCT TYPE(1/2)" required><br><br>
<input type="text"  id="validationCustom01" name="name" value="{{$products['name']}}" placeholder="PRODUCT NAME" required><br><br>
<input type="text" id="validationCustom01" name="pdesc"value="{{$products['productdescription']}}"  placeholder="PRODUCT DESCRIPTION" required><br><br>
<input type="text" id="validationCustom01"  name="stock"  value="{{$products['stock']}}" placeholder="PRODUCT STOCK ARRIVED" required><br><br>
<input type="text" id="validationCustom01" name="price" value="{{$products['price']}}" placeholder="ORGINAL PRICE" required><br><br>
<input type="text" id="validationCustom01" name="oprice"value="{{$products['offerprice']}}"  placeholder="OFFER PRICE" required><br><br>
<input type="text" id="validationCustom01" name="del" value="{{$products['delivery']}}" placeholder="DELIVERY (YES/NO)" required><br><br>
<input type="text" id="validationCustom01" name="dyn" value="{{$products['deliverycharge']}}"  step="any" placeholder="DELIVERY CHARGE(IF APPLICABLE)" required><br><br>
<input type="text" id="validationCustom01" name="tprice"  value="{{$products['totalprice']}}" placeholder="TOTAL PRICE" required><br><br>
<input type="text" id="validationCustom01" name="gallery" value="{{$products['gallery']}}" placeholder="GALLERY" required><br><br>
<button type="submitt" button class="btn btn-success" onclick="return confirm('Data Reset!')">RESET</button>
</form>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
