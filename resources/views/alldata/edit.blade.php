<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container" style="padding:30px;">

<p>
    <a class="btn btn-primary btn-sm" href="/" role="button">Home</a>
    <a class="btn btn-primary btn-sm" href="/read" role="button">All Data</a>
    <a class="btn btn-primary btn-sm" href="/create" role="button">Create</a>
    <a class="btn btn-primary btn-sm" href="/userorder" role="button">Order List</a>
  </p>
 
    <form action="{{url('update/'.$order->id)}}" method="Post">
    @csrf
  <div class="form-group">
  <h1>Product Order</h1>
    <label for="product">Product</label>
    <input type="text" class="form-control" name="product" value ="{{$order->product}}">
  </div>
  <div class="form-group">
    <label for="quantiy">Quantity</label>
    <input type="text" class="form-control" name="quantity" value ={{$order->quantity}}>
  </div>
  <div class="form-group">
    <label for="rate">Rate</label>
    <input type="text" class="form-control" name="rate" value ={{$order->rate}}>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</div>
   
</body>
</html>
