<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion client (CRUD)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
  <div class="row">
    <div class="col s12">
    <h1>Modifier un client</h1>
    <hr>
    @if (session('status'))
         <div class="alert alert-success">
            {{session('status')}}
         </div>
         @endif

         <ul>
            @foreach ($errors->all() as $error)
               <li class="alert alert-danger">{{$error}}</li>
               @endforeach
         </ul>
    <form action="/update/traitement" method="POST">
        @csrf
        <input type="text" name="nom" style="display:none;" value="{{$clients->nom ?? ''}}">
<div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom" value="{{$clients->nom ?? ''}}">
 </div>
 

 <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="email" value="{{$clients->email ?? ''}}">
 </div>


 <div class="mb-3">
    <label for="Phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="Phone" name="phone" value="{{$clients->phone ?? ''}}">
 </div>

 <div class="mb-3">
    <label for="Status" class="form-label">Status</label>
    <input type="text" class="form-control" id="Status" name="status" value="{{$clients->status ?? ''}}">
 </div>

<br>
  <button type="submit" class="btn btn-primary">Modifier un client</button>
  <br></br>
  <a href="/client" class="btn btn-danger">Revenir à la liste des client</a>
</form>
         
    </div>
   
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>