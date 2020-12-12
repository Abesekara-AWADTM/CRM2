<!doctype html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<title>View products</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

.navbar-custom{
  background:#233554 !important;
}
::placeholder { 
  color: #233554 !important;
  opacity: 1; 
  font-weight: Bold;
  font-size:15px;
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
<div class="bar">
<nav class="navbar navbar-custom">
<div class="container-fluid">
</div>
</nav>
<br>
</div>
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-2 col-xs-12" style="color:#233554" >
</div>
<div class="col-md-10 col-sm-10 col-xs-12">
<div class="content">
@include('flash-message')

<form action="/search" method="GET" role="search">
{{ csrf_field() }}
<div class="input-group">
<input type="text" class="form-control" name="query" id="query"
 placeholder="Search Products"> <span class="input-group-btn">
<button type="submit" class="btn btn-default">
 <span class="glyphicon glyphicon-search"></span>
  </button>
  </span>
  </div>
</form>
</br>
</br>
<font size="2" face="Verdana" >
<table class="table table-striped" border="4" >
  <thead >
    <tr style="height:70px;width:100px">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Band</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      
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
      <td>
   <tab></tab>
          <a href={{"edit/".$product['ProductID']}} class="btn btn-success" style="margin:2px"> Edit</a><tab></tab>
          <a href={{"/delete/".$product['ProductID']}}  class="btn btn-danger" style="margin:10px"> Delete</a>
      </td>

</tr>
@endforeach
</tbody>
</table>
</font>
</br>
<div style="text-align: right;font-size: 15px;">
<span>{{$products->links()}}</span>
</div>
</div>
</div>

    </div>
  </div>
</div>

</div>
</body>
</html>

