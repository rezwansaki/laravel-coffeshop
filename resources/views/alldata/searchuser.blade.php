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


  <h2><b>User Information</b></h2> <br/>
  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User Name</th>
          <th scope="col">Email</th>
          <th scope="col">Profile Photo</th>
        </tr>
      </thead>

      <tbody>
      @foreach($srch_result as $srch_results)
        <tr>
          <td>{{$srch_results->id}}</td>
          <td><a href="{{url('user/'.$srch_results->id)}}">{{$srch_results->name}}</a></td>
          <td>{{$srch_results->email}}</td>
          <td><img src="{{$srch_results->profile_photo_path}}" alt="user_photo" width='50px'></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    


    


  </div>
   
</body>
</html>