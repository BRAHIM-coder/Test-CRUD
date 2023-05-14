<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion client (CRUD)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container text-center">
  <div class="row">
    <div class="col s12">
    <h1>Gestion client (CRUD)</h1>
    <hr>
    <a href="/ajouter" class="btn btn-primary">Ajouter un client</a>
    <hr>
    @if (session('status'))
         <div class="alert alert-success">
            {{session('status')}}
         </div>
         @endif
    <table class="table">
      <thead>
        <tr>
           <th>Nom</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Status</th>
           <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->nom}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->status}}</td>
            <td>
                <a href="/update-client/{{{ $client->nom }}}" class="btn btn-info">Modifier</a>
                <a href="/delete-client/{{{ $client->nom }}}" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
   
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>