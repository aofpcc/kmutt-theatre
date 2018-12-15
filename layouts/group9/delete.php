<head>
  <title>DELETE</title>
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
    <h1>Delete Movie</h1>
    <p>Welcome!!</p>
  </div>
</div>

<div class="container text-center">
  <button onclick="location.href = '/emp/group9'" type="button" class="btn btn-primary btn-lg">Home</button>
  <button onclick="location.href = '/emp/group9/add'" type="button" class="btn btn-secondary btn-lg">Add Movie</button>
  <button onclick="location.href = '/emp/group9/search'" type="button" class="btn btn-success btn-lg">Search Movie</button>
</div>

<br>

<div class="container text-center">
  <form action="/group9/daction" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Enter Movie Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="Mname" placeholder="Name" value=""
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
      <th scope="col">Name</th>
      <th scope="col">Detail</th>
      <th scope="col">Length</th>
      <th scope="col">Language</th>
      <th scope="col">Release Date</th>
      <th scope="col">End Date</th>
      <th scope="col" />
    </tr>
  </thead>

  <!-- rows -->
  <tbody>
    <?php
    $result = $this->sqlResult;
    if($result != NULL)
    for ($i = 0; $i < count($result); $i++) {
        $row = $result[$i];

        echo '<tr>';
        echo '<th scope="row">' . $row['ID'] . '</th>';
        echo '<td>' . $row['NAME'] . '</td>';
        echo '<td>' . $row['DETAIL'] . '</td>';
        echo '<td>' . $row['LENGTH'] . '</td>';
        echo '<td>' . $row['LNG'] . '</td>';
        echo '<td>' . $row['RELEASE_DATE'] . '</td>';
        echo '<td>' . $row['END_DATE'] . '</td>';
        echo '<td><button  type="button" class="btn btn-danger">Delete Movie</button></td>';
        // echo $row['NAME'];
        echo '</tr>';
    }
    ?>

    <!-- <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr> -->
  </tbody>
</table>