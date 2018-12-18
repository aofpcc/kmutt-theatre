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

    /* footer {
      background-color: #f2f2f2;
      padding: 25px;
    } */
  </style>
</head>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Update Movie</h1>
    <p>Welcome!!</p>
  </div>
</div>

<div class="container text-center">
  <button onclick="location.href = '/emp/group9'" type="button" class="btn btn-primary btn-lg">Home</button>
  <button onclick="location.href = '/emp/group9/add'" type="button" class="btn btn-secondary btn-lg">Add Movie</button>
  <button onclick="location.href = '/emp/group9/search'" type="button" class="btn btn-success btn-lg">Search Movie</button>
</div>
<br>
<div class="container">
  <?php echo $this->sqlResult; ?>
  <form action="/emp/group9/action/update" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">ID</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="id" placeholder="Name" value="<?php echo $this->id; ?>"
        required disabled>
    </div>
    <input type="hidden" name="id" value="<?=$this->id?>">
    <form action="/emp/group9/action" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Name" value=""
        required>
    </div>
    <div class="form-group">
      <div class="form-group">
        <label for="exampleFormControlInput1">Length (00:00:00)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="time" placeholder="Minute" value=""
          required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Describetion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des" placeholder="add Describetion" required></textarea>
      </div>
      <button class="btn btn-primary" type="submit">Update</button>
        </div>
  </form>
</div>