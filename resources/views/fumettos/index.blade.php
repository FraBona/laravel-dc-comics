<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="section">
 <!--   <div class="container">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>Immagine</th>
              <th>Titolo</th>
              <th>Descrizione</th>
              <th>Prezzo</th>
              <th>Serie</th>
              <th>Date di rilascio</th>
              <th>Tipo</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($fumettos as $fumetto)

              <tr>
                <tr>
                  <img src="{{ $fumetto->thumb }}" alt="" width="50">
                </tr>
                <tr>{{$fumetto->title}}</tr>
                <tr>{{$fumetto->description}}</tr>
                <tr>{{$fumetto->price}}</tr>
                <tr>{{$fumetto->series}}</tr>
                <tr>{{$fumetto->sale_date}}</tr>
                <tr>{{$fumetto->type}}</tr>
                <tr></tr>
              </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div> -->
    <h1><a href="{{route('fumettos.create')}}">Nuovo Fumetto</a></h1>
    @foreach ($fumettos as $fumetto)

    <img src="{{ $fumetto->thumb }}" alt="" width="68">
    <p><a href="{{route('fumettos.show', $fumetto->id)}}">{{$fumetto->title}}</a></p>
    <p>{{$fumetto->description}}</p>
    <p>{{$fumetto->price}}</p>
    <p>{{$fumetto->series}}</p>
    <p>{{$fumetto->sale_date}}</p>
    <p>{{$fumetto->type}}</p>
    @endforeach
  </div>
</body>
</html>