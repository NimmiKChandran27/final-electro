<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body  background="https://png.pngtree.com/thumb_back/fw800/background/20191015/pngtree-white-polygon-geometric-triangle-vector-background-image_319706.jpg">
{{View::make('header')}}
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
<style>
.custom-login
{
    height: 500px;
    padding-top: 100 px;
}

.img.slider-img{
    height:  100px;
    width:   100px;
}
.carousel-inner
{
    height:   700px;
    width:   1000px;
}
.custom-product
{
   height: 100px;
    width: 1000px;
    
    }
.slider-text{
    background-color: #c6c7c75e  

}
.trending-image
{
    height: 100px;
}
.trending-item{
    
    float: left;
    width: 32%;
}
.trending-wrapper
{
    margin: 30px;
}
.detail-img
{
    height: 200px;
}
.search-box
{
    width: 500px !important
}
.cart-list-divider
{
border-bottom: 1px solid #ccc;
margin-bottom: 20px;
padding-bottom: 20px;
}


</style>
</html>