<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
    <h1>{{$fumetto->title}}</h1>
    <p>{{$fumetto->description}}</p>
    <a href="{{route('fumettos.index')}}">Home</a>
  </section>
</body>
</html>