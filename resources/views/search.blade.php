<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Searching</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
h1{
  color: #233554;
  text-align: center;
  text-decoration: underline;
  text-transform: capitalize;
}
  .content{
  padding-top: 20px;
  padding-right: 60px;
  padding-bottom: 30px;
  padding-left: 20px;
  }
tr:nth-child(odd) {
background-color: lightskyblue;
text-align: center;
font-size:14px;
}

tr:nth-child(even) {
background-color:#d5e4f2;
text-align: center;
font-size:14px;
}

th { background-color:#233554;
      color:white;
      text-align: center;
      font-size:15px;
}

.navbar-custom { 
 background-color:#233554;}
</style>
</head>
<body>
<nav class="navbar navbar-custom">
<div class="container-fluid">
</nav>

<div class="row">


<div class="col-md-2 col-sm-2 col-xs-12" >
</div>
<div class="col-md-10 col-sm-10 col-xs-12">
<div class="content">
  <div class="search">
    <h1> Searched Products</h1>
  </div>
</br>
</br>
</br>
<div class="table-responsive">
    <table class="table table-striped" border="2">
    <thead >
    <tr style="height:70px;width:50px">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Band</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
 @foreach($products as $product)
    <tr>                                                
      <th scope="row">{{$product['ProductID']}}</th>
      <td>{{$product['ProductName']}}</td>
      <td>{{$product['Price']}}</td>
      <td>{{$product['Brand']}}</td>
      <td>{{$product['Qty']}}</td>
      <td>{{$product['Description']}}</td>
      
    </tr>
@endforeach
</tbody>
</table>
</div>
<span>{{$products->links()}}</span>
</div>
</div>

</body>
</html>