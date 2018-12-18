<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Search Movie</h1>
    <p>Welcome!!</p>
  </div>
</div>

    <div class="container text-center">
      <button onclick = "location.href = '/emp/group9/action888'" type="button" class="btn btn-primary btn-lg">Home</button>
      <button onclick = "location.href = '/emp/group9/add'" type="button" class="btn btn-secondary btn-lg">Add Movie</button>
      <button onclick = "location.href = '/emp/director/add'" type="button" class="btn btn-secondary btn-lg">Add Director</button>
      <button onclick = "location.href = '/emp/soundtrack/add'" type="button" class="btn btn-secondary btn-lg">Add Soundtrack</button>
      <button onclick = "location.href = '/emp/subtitle/add'" type="button" class="btn btn-secondary btn-lg">Add Subtitle</button>
      <button onclick = "location.href = '/emp/genre/add'" type="button" class="btn btn-secondary btn-lg">Add Genre</button>
    </div>

<div class="container text-center">
  <form action="/emp/group9/action2" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Enter Movie Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Mname" placeholder="Name" value="<?php echo $this->searchKeyword; ?>"
        required>
    </div>
    <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>

<br>

    <table class="table">
      <!-- Head of the tables -->
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Director</th>
          <th scope="col">Studio</th>
          <th scope="col"></th>
        </tr>
      </thead>

  <!-- rows -->
  <tbody>

 
  </tbody>
</table>