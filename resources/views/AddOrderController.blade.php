<!doctype html>

<head><title>addOrder</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

 
/*div {

  background: #3a6186; 
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); 
  background: linear-gradient(to left, #3a6186 , #89253e); 
    color : #fff;    
}*/
table{
  font-size: 1.5em;
  line-height: 3em;
  border-color: #233554;
  border-width:2px;
  color: #233554;
  
  font-weight: normal;

}

.form-line{
  border-color: #233554;
  border-right: 3px  #233554;}

.form-control{

  font-size: 1.5em;
  line-height: 3em;
  border-color: #233554;
  border-width: 2px ;
  color: #233554;
  font-weight: normal;
  
}
.table th{
    border: #233554 solid 2px !important;
}
.table td{
    border: #233554  solid 2px !important;
}

.navbar-custom { 
 background-color:#233554;}
</style>
</head>
<body>
<nav class="navbar navbar-custom">
<div class="container-fluid">
</nav>
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-2 col-xs-12" >
  
</div>
<div class="col-md-10 col-sm-10 col-xs-12">
<div class="content">
<form  action="/add_orders" method="POST" >
{{csrf_field()}}
<section>
</br>
</br>
</br>
</br>
</br>

<div class="row">
<div class="col-lg-6 col-sm=6">
<div class="form-group">
<input type="text" name="Name" class="form-control" placeholder="Customer Name" required="true">  
</div>
</div>
<div class="col-lg-6 col-sm=6">
<div class="form-group">
<input type="text" name="Address" class="form-control" placeholder="Address" required="true">  
</div>
</div>
<div class="col-lg-6 col-sm=6">
<div class="form-group">
<input type="text" name="MobileNo" class="form-control" placeholder="Contact Number" required="true">  
</div>
</div>
<div class="col-lg-6 col-sm=6">
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="Email">  
</div>
</div>
<div class="col-lg-6 col-sm=6">
<div class="form-group">
<input type="text" name="NIC" class="form-control" placeholder="NIC" required="true">  
</div>
</div>


<div class="col-lg-12 col-sm-12">
</br>
<table class="table table-bordered" >
  <thead>
    
    <th > Product Name</th>
    <th> Quantity</th>
    <th style="text-align:center"> <a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
  </thead>
  <tbody>
    <tr>
      
      <td>
      <input type="text"name="productname[]" class="form-control Quantity" required="true">
      </td>
      <td>
        <input type="text"name="Quntity[]" class="form-control Quantity" required="true">
      </td> 
      <td style="text-align:center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
    </tr>
  </tbody>
  <tfoot>
    <td style="border:none"></td>
     <td style="border:none"></td>
     <td style="text-align:center"><input type="submit" name="" value="Save" class="btn btn-success"></td>
  </tfoot>
</table>
</div>
</div>
</section>
</form>
 </div>

<script type="text/javascript">
$('.addRow').on('click',function(){
  addRow();
});
function addRow(){
 var tr='<tr>'+
      
    '<td>'+
    '<input type="text"name="productname[]" class="form-control Quantity">'+
    ' </td>'+
    '<td><input type="text"name="Quntity[]" class="form-control Quantity"></td> '+
    '<td style="text-align:center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
    '</tr>';
$('tbody').append(tr);
};

$('.remove').live('click',function(){
  var last=$('tbody tr').length;
  if(last==1){
    alert("you can not remove last one");
  }
  else{
  $(this).parent().parent().remove();
}
});

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>



</div>
</div>
</div>
</div>
</body>
</html>

