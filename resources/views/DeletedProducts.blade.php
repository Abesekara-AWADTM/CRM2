<table class="table table-striped" border="4">
  <thead >
    <tr style="height:70px;width:100px">
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
      <td>
</tr>
@endforeach
</tbody>
</table>