

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container" style="padding:20px;">

<p>
    <a class="btn btn-primary btn-sm" href="/" role="button">Home</a>
    <a class="btn btn-primary btn-sm" href="/read" role="button">All Data</a>
    <a class="btn btn-primary btn-sm" href="/create" role="button">Create</a>
    <a class="btn btn-primary btn-sm" href="/userorder" role="button">Order List</a>
  </p>
 

<table class="table">
<h2>Order Lists</h2>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Total</th>
      <th scope="col">User</th>
      <th scope="col"></th>    
    </tr>
  </thead>
  <tbody>
  @foreach($order as $orders)

 
    <tr>
      <td>{{$orders->id}}</td>
      <td>{{$orders->product}}</td>
      <td>{{$orders->quantity}}</td>
      <td>{{$orders->rate}}</td>
      <td>{{$orders->total}}</td>
      <td>{{$orders->user_id}}</td>
      <td><a href="{{url('edit/'.$orders->id)}}" class="btn btn-primary btn-sm">Edit</a>
     <a href="{{url('delete/'.$orders->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>

@endforeach
  </tbody>
</table>


</div>
   
</body>
</html>