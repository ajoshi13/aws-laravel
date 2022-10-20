<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <br>
    <br>

    <div class="container">
        <h1>Register</h1>
        <br>
        <br>

        <form action="/register" method=POST >
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input name ="name" type="text" class="form-control"   placeholder="Enter User Name" value="{{old('name')}}">
              <span class="text-danger">@error('name') {{$message}} @enderror</span>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
              <span class="text-danger">@error('email') {{$message}} @enderror</span>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>


            <button type="submit" class="btn btn-primary">Register</button>
          </form>

    </div>

  </body>
</html>
