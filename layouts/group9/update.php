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
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Name" value="" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Director</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="director" placeholder="Name" value="" required>
    </div>
    <div class="form-group">
      <label class="col-xs-3" for="exampleFormControlInput1">Language</label>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="language[]" value="th"> TH
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="language[]" value="EN"> EN
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3" for="exampleFormControlInput1">Subtitle</label>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="subtitle[]" value="th"> TH
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="subtitle[]" value="EN"> EN
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-3" for="exampleFormControlInput1">Gerne</label>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="gerne[]" value="Action"> Action
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="gerne[]" value="Adult"> Adult
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="gerne[]" value="Fantasy"> Fantasy
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="gerne[]" value="Scifi"> Sci-fi
        </label>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Length (00:00:00)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="time" placeholder="Minute" value="" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Studio</label>
        <select class="form-control" id="exampleFormControlSelect1" name="studio_name">
          <option value="marvel">Marvel</option>
          <option value="a">a</option>
          <option value="DC">DC</option>
          <option value="universal">Universal</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">License Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="licese_price" placeholder="$" value="" required>
      </div>
      <div class="from-group">
        <label for="exampleFormControlInput1">Bought Date</label>
        <!-- <div class="input-group-prepend">
        <span class="input-group-text" id=""></span>
      </div> -->
        <input class="form-control" type="date" name="bought_date">
      </div>
      <br>
      <div class="from-group">
        <label for="exampleFormControlInput1">Expired Date</label>
        <!-- <div class="input-group-prepend">
        <span class="input-group-text" id=""></span>
      </div> -->
        <input class="form-control" type="date" name="expired_date">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Describetion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des" placeholder="add Describetion"></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit">Update</button>
      </div>
    </div>
  </form>
</div>
<br>