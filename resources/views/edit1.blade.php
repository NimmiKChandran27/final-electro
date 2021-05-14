<h1>EDIT PRODUCT DETAILS</h1>
<form action="/edit1" method="POST">
@csrf
<input type="hidden" name="id" value="{{$order['id']}}"><br><br>
<label for="" class="label">PRODUCT ID:{{$order['product_id']}}</label><br><br>
<label for="" class="label">USER ID:{{$order['user_id']}}</label><br><br>
<input type="text" name="status" value="{{$order['status']}}" placeholder="STATUS"><br><br>
<label for="" class="label">PAYMENT METHOD:{{$order['payment_method']}}</label><br><br>
<input type="text" name="pstatus"  value="{{$order['payment_status']}}" placeholder="PAYMENT STATUS"><br><br>

<button type="submitt">RESET</button>
</form>