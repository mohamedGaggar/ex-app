<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>



<form action="{{route('admin.create')}}" method="post" enctype="multipart/form-data">

@csrf
@method('put')
<div>

    <label for="image">attachment</label>
    <input type="file" name="attachment">
</div>


<div>
    <label for="name">title</label>
    <input type="text" name="title">
</div>



<div>
    <label for="price">price</label>
    <input type="text" name="price">

</div>

<div>
    <label for="url">url</label>
    <input type="text" name="url">

</div>
<button type="submit">submit</button>
</form>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
