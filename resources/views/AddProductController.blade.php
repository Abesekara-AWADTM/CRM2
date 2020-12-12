<html>
<head>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Add Products</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <style>
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
/*#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 100px;
  width: 100%;
  width: 100vw;
  height: 650px;
  /*display: ;background: #3a6186;                          
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); 
  background: linear-gradient(to left, #3a6186 , #89253e); 
    color : #fff;    
}*/
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 3px solid #233554;
}

.form-group{
  margin-top: 10px;
  color:#233554;
  
}
label{
  font-size: 1.5em;
  line-height: 1em;
  font-weight: normal;
  color:#233554;
}
.form-control{
  font-size: 1.2em;
  color: #233554;
  
}
textarea.form-control {
    height: 135px;
    margin-top: px;

}

.submit{
  font-size: 1.5em;
  float: right;
  width: 150px;
  color: #fff;

}

.btn-default
{
  background-color: #233554;
  color:#FFF;
  border-color: #2F3E48;
}
.navbar-custom { 
 background-color:#233554;}
</style>
</head>
<body>
  <div>
<nav class="navbar navbar-custom">
</nav>
<section id="contact">

<div class="section-content">
</div>   
<div class="contact-section">
<div class="container">
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
{{$error}}
</div>
 @endforeach
<form action="/addProduct" method="post">
{{csrf_field()}}
</br>
</br>
<div class="col-md-6 form-line">
<div class="form-group">
<label for="ProductName">Product Name</label>
<input type="text" class="form-control" name="ProductName" placeholder=" Enter Product type" required="true">
</div>
<div class="form-group">
<label for="Brand">Brand</label>
<input type="text" class="form-control" name="Brand" placeholder=" Enter Brand type" required="true">
</div>	
<div class="form-group">
<label for="price">Price</label>
<input type="number" class="form-control" name="Price" placeholder=" Enter Unit Price" required="true" min="100" >
</div>
<div class="form-group">
<label for="Quantity">Quantity</label>
<input type="number" class="form-control" name="Quantity" placeholder=" Enter Quantity" required="true"min="1">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for ="description"> Description</label>
<textarea  class="form-control" name="description" placeholder="About Product Description" required="true"></textarea>
</div>
<div class="text-right">
<button type="Submit"  Value="Submit"class="btn btn-default btn-lg">Add Product</button>	 			
</div>
</div>
</form>
</div>
</section>
</div>
</body>
 </html>