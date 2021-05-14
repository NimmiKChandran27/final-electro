<h1>EDIT PRODUCT DETAILS</h1>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$products['id']}}"><br><br>
<input type="text" name="ptype" value="{{$products['prodtype']}}" placeholder="PRODUCT TYPE(1/0)"><br><br>
<input type="text" name="name" value="{{$products['name']}}" placeholder="PRODUCT NAME"><br><br>
<input type="text" name="pdesc"value="{{$products['productdescription']}}"  placeholder="PRODUCT DESCRIPTION"><br><br>
<input type="text" name="stock"  value="{{$products['stock']}}" placeholder="PRODUCT STOCK ARRIVED"><br><br>
<input type="text" name="price" value="{{$products['price']}}" placeholder="ORGINAL PRICE"><br><br>
<input type="text" name="oprice"value="{{$products['offerprice']}}"  placeholder="OFFER PRICE"><br><br>
<input type="text" name="del" value="{{$products['delivery']}}" placeholder="DELIVERY (YES/NO)"><br><br>
<input type="text" name="dyn" value="{{$products['deliverycharge']}}"  step="any" placeholder="DELIVERY CHARGE(IF APPLICABLE)"><br><br>
<input type="text" name="tprice"  value="{{$products['totalprice']}}" placeholder="TOTAL PRICE"><br><br>
<input type="text" name="gallery" value="{{$products['gallery']}}" placeholder="GALLERY"><br><br>
<button type="submitt">RESET</button>
</form>