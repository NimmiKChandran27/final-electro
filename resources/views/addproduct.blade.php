<h1>ADD PRODUCT</h1>
<form action="add" method="POST">
@csrf
<input type="text" name="ptype" placeholder="PRODUCT TYPE(1/0)"><br><br>
<input type="text" name="name" placeholder="PRODUCT NAME"><br><br>
<input type="text" name="pdesc" placeholder="PRODUCT DESCRIPTION"><br><br>
<input type="text" name="stock" placeholder="PRODUCT STOCK ARRIVED"><br><br>
<input type="text" name="price" placeholder="ORGINAL PRICE"><br><br>
<input type="text" name="oprice" placeholder="OFFER PRICE"><br><br>
<input type="text" name="del" placeholder="DELIVERY (YES/NO)"><br><br>
<input type="text" name="dyn" step="any" placeholder="DELIVERY CHARGE(IF APPLICABLE)"><br><br>
<input type="text" name="tprice" placeholder="TOTAL PRICE"><br><br>
<input type="text" name="gallery" placeholder="GALLERY"><br><br>
<button type="Button">ADD PRODUCT</button>
</form>