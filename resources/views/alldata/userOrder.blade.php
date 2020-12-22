<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeeshop</title>
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


  <h2><b>Sells Information</b></h2> <br/>
  
    <form class="form-inline" action="/search" method="Post">
      @csrf
      <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" placeholder="search..." name="searchvalue">
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </form>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">U_ID</th>
          <th scope="col">User</th>
          <th scope="col">P_ID</th>
          <th scope="col">Product</th>
          <th scope="col">Quantity</th>
          <th scope="col">Rate</th>
          <th scope="col">Total</th>
        </tr>
      </thead>

      <tbody>
      @foreach($order as $orders)
        <tr>
          <td>{{$orders->user->id}}</td>
          <td><a href="{{url('user/'.$orders->user->id)}}">{{$orders->user->name}}</a></td>
          <td>{{$orders->id}}</td>
          <td>{{$orders->product}}</td>
          <td>{{$orders->quantity}}</td>
          <td>{{$orders->rate}}</td>
          <td>{{$orders->total}}</td>
        </tr>
      @endforeach
      </tbody>

      <tfoot style="background-color:grey;">
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
      <td><b>G.Total: </b></td>
      <td><b>{{ $order->sum('total') }}</b></td>
    </tr>
  </tfoot>
    </table>
    


    


  </div>
   
</body>
</html>