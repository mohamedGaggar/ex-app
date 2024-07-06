<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>register</h1>

    @if(Session::has('success'))
<p class="alert alert-success" style="width:600px;margin-left:100px">
    {{Session::get('success')}}
</p>
<a href="/login" style="margin-left:100px">login now</a>
@else
<p>{{Session::get('error')}}</p>
  @endif



    <form action="/register" method="post">
@csrf
    <div class="mb-3" style="width:600px;margin-left:100px">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="insert your name">
    <div id="emailHelp" class="form-text">
@error('name')
<p class="alert alert-danger">
  {{$message}}
</p>
@enderror


    </div>
  </div>



<div class="mb-3" style="width:600px;margin-left:100px">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
    <div id="emailHelp" class="form-text">
      @error('email')
  <p class="alert alert-danger"> {{$message}}</p>
      @enderror
    </div>




  </div>
  <div class="mb-3" style="width:600px;margin-left:100px">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="fill the password box">
  </div>
  @error('password')
  <p class="alert alert-danger">{{$message}}</p>
  @enderror
  <div class="mb-3 form-check" style="margin-left:100px">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:100px">Submit</button>
</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
