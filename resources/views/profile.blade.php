<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: blueviolet;">Egy Courses</a>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDlbl5siEZD0Jq1aJwi0BSQ7Lce5x6blXahg&s" alt="hi res the god of wisdom and knowledge in ancient egyptian history" style="border-radius:45%;width:80px;margin-right:50px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cart')}}">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">logout</a>
            </li>
          </ul>
          <form class="d-flex" role="search" method="get" action="">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <!-- end of navbar -->

@foreach ($data as $item)
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->title}}</h5>
    <iframe src="{{$item->url}}" frameborder="0"></iframe>
  </div>
</div>
@endforeach






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
