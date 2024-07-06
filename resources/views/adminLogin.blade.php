<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Admin</h1>
    @if(Session::has('message'))
    <div class="alert alert-danger">{{Session::get('message')}}</div>
    @endif
    <form action="{{ route('ad') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="adminEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="adminEmail" aria-describedby="emailHelp" name="adminEmail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="adminPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="adminPassword" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="adminRemember" name="adminRemember">
            <label class="form-check-label" for="adminRemember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
