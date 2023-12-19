<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="{{route('fumettos.update', $fumetto)}}" method="POST">
  @csrf
  @method('PUT')
  <label for="title">Title</label><br>
  <input type="text" id="title" name="title" value="{{$fumetto->title}}"><br>
  <label for="description">Description</label><br>
  <input type="text" id="description" name="description" value="{{$fumetto->description}}"><br><br>
  <label for="thumb">Image</label><br>
  <input type="text" id="thumb" name="thumb" value="{{$fumetto->thumb}}"><br><br>
  <label for="price">Price</label><br>
  <input type="number" id="price" name="price" value="{{$fumetto->price}}"><br><br>
  <label for="series">Series</label><br>
  <input type="text" id="series" name="series" value="{{$fumetto->series}}"><br><br>
  <label for="sale_date">Sale Date</label><br>
  <input type="date" id="sale_date" name="sale_date" value="{{$fumetto->sale_date}}"><br><br>
  <label for="type">Type</label><br>
  <input type="text" id="type" name="type" value="{{$fumetto->type}}"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>