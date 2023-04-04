<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @isset($res)
            <div class="alert alert-primary">{{ $res }}</div>
        @endisset
            
        <form action="{{ route('addBookform') }}" method="post" class="form">
@csrf
            <input type="text" name="titre" placeholder="Titre" class=" mt-2 form-control">
            <input type="date" name="annee_de_publication" placeholder="Annee de publication" class=" mt-2 form-control">
            <input type="number" name="nb_pages" placeholder="Nb_pages" class="form-control mt-2">
            <input type="number" name="auteur_id" placeholder="Auteur id" class="form-control mt-2">
            <input type="submit" value="Ajouter" class="btn btn-primary mt-2">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
