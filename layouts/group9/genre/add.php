<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
  </style>
</head>
<div class="jumbotron">
  <div class="container text-center">
    <h1>ADD Genre</h1>      
  </div>
</div>

<div class="container text-center">
        <button onclick = "location.href = '/emp/group9'" type="button" class="btn btn-primary btn-lg">Home</button>
        <button onclick = "location.href = '/emp/group9/search'" type="button" class="btn btn-secondary btn-lg">Search Movie</button>
</div>

<div class="container">
  <form action="/emp/genre/add" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Type name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="genre" placeholder="E.g. Romantic" value="" required>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
  <br>
  <br>
  <br>
</div>
