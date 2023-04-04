<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-5">
      <a href="{{ route('addBookform') }}" class="link m-3">Add book</a>

    <div class="row">
        @forelse ( $livres as $livre)
       <div class="card border-primary m-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{  $livre->titre }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{  $livre->annee_de_publication }}</h6>
              <span class="card-link">NB Pages {{  $livre->nb_pages }}</a><br>
              <a href="#" class="card-link">Auteur Id {{  $livre->auteur_id }}</span><br>
              <a href="/edit/{{$livre->id}}" class="btn btn-success">Update</a>
              <a href="/deleteBook/{{$livre->id}}" class="btn btn-warning">Delete</a>
              {{-- <a href="#" class="card-link">Another link</a> --}}
          </div>
        </div>
        @empty
<h1>No data !!</h1>
        @endforelse
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
