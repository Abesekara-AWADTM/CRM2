<html>
    <head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Edit Product</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <style>

.form-line{
  border-right: 3px solid #233554;
}
.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.5em;
  line-height: 1em;
  font-weight: Bold;
  color:#233554;
}
.form-control{
  font-size: 1.2em;
  color: #233554;
}
textarea.form-control {
    height: 135px;
    margin-top: 2px;
}
.navbar-custom { 
 background-color:#233554;}
 .side{
    background-color:#233554;  
 }
 .content{
  padding-top: 100px;
  padding-right: 10px;
  padding-bottom: 20px;
  padding-left: 20px;
 }
 .btn-default
{
  background-color: #233554;
  color:#FFF;
  border-color: #2F3E48;
}


 </style>

</head>
<body>
<div class="row">
<nav class="navbar navbar-custom">
<div class="container-fluid">
</nav>

<div class="col-md-2 col-sm-2 col-xs-12" style="color:#233554" >
</div>
<div class="col-md-10 col-sm-10 col-xs-12">
<div class="content">
<form action="/editproduct" method="post">
@csrf
<div class="col-md-6 form-line">
<div class="form-group">
 <input type="hidden"  class="form-control" name="ProductID" value="{{$data['ProductID']}}">
</div>
<div class="form-group">
<label for="ProductName">Product Name</label>
<input type="text" class="form-control" name="ProductName" value="{{$data['ProductName']}}">
</div>
<div class="form-group">
<label for="Brand">Brand</label>
<input type="text" class="form-control" name="Brand" value="{{$data['Brand']}}">
</div>	
<div class="form-group">
<label for="price">Price</label>
<input type="number" class="form-control" name="Price" value="{{$data['Price']}}" min="100" >
</div>
<div class="form-group">
<label for="Quantity">Quantity</label>
<input type="number" class="form-control" name="Quantity" value="{{$data['Qty']}}" min="1">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for ="description"> Description</label>
<textarea  class="form-control"  class="form-control" name="description" value="{{$data['Description']}}"></textarea>
</div>
<div class="text-right">
<button type="Submit"  Value="Update"class="btn btn-default btn-lg"> Update</button>	 	
</div>		

</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>