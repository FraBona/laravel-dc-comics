<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="section">
    <div class="container">
    <h1><a href="{{route('fumettos.create')}}">Nuovo Fumetto</a></h1>
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
              <th>Modifica</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($fumettos as $fumetto)

              <tr>
                <td>
                  <img src="{{ $fumetto->thumb }}" alt="" width="50">
                </td>
                <td><a href="{{route('fumettos.show', $fumetto->id)}}">{{$fumetto->title}}</a></td>
                <td>{{$fumetto->description}}</td>
                <td>{{$fumetto->price}}</td>
                <td>{{$fumetto->series}}</td>
                <td>{{$fumetto->sale_date}}</td>
                <td>{{$fumetto->type}}</td>
                <td>
                  <a href="{{route('fumettos.edit',$fumetto)}}">Edit</a>
                </td>
                <td>
                  <form action="{{route('fumettos.destroy', $fumetto)}}" method="post">
                    @csrf

                    @method('DELETE')

                    <input type="submit" value="cancella">
                  </form>
                </td>
              </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>

</body>
</html>