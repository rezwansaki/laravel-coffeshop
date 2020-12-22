

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
    <h2>{{$user->name}}</h2> 
    <thead>
    <tr>
        <th scope="col">P_ID</th>
        <th scope="col">Product</th>          
        <th scope="col">Rate</th>          
        <th scope="col">Quantity</th>          
        <th scope="col">Total</th>          
    </tr>
    </thead>
    <tbody>
    @foreach($user_order as $user_orders) 
        <tr>
            <td>{{$user_orders->id}}</td>
            <td>{{$user_orders->product}}</td>
            <td>{{$user_orders->rate}}</td>
            <td>{{$user_orders->quantity}}</td>
            <td>{{$user_orders->total}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot style="background-color:grey;">
    <tr>
    <td></td>
    <td></td>
    <td></td>
      <td><b>G.Total: </b></td>
      <td><b>{{ $user_order->sum('total') }}</b></td>
    </tr>
  </tfoot>
    </table>

</div>
   
</body>
</html>