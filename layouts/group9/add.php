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
    <h1>ADD Movie</h1>
    <p>Welcome!!</p>
  </div>
</div>

<div class="container text-center">
  <button onclick="location.href = '/emp/group9'" type="button" class="btn btn-primary btn-lg">Home</button>
  <button onclick="location.href = '/emp/group9/search'" type="button" class="btn btn-secondary btn-lg">Search Movie</button>
</div>

<div class="container">
  <form action="/emp/group9/action" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Name" value=""
        required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Director</label>
      <select name="director_id" id="" class="form-control">
        <?php foreach ($this->directors as $director) {?>
        <option class value="<?=$director['id']?>">
          <?=$director["fname"] . " " . $director["lname"]?>
        </option>
        <?php }?>
      </select>
    </div>
    <div class="form-group">
      <label class="col-xs-3" for="exampleFormControlInput1">Language</label>
      <?php foreach ($this->soundtracks as $soundtrack) {?>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="language[]" value="<?=$soundtrack["language"]?>">
          <?=$soundtrack["language"]?>
        </label>
      </div>
      <?php }?>
    </div>
    <div class="form-group">
      <label class="col-xs-3" for="exampleFormControlInput1">Subtitle</label>
      <?php foreach ($this->subtitles as $subtitle) {?>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="subtitle[]" value="<?=$subtitle["language"]?>">
          <?=$subtitle["language"]?>
        </label>
      </div>
      <?php }?>
      <div class="form-group">
        <label class="col-xs-3" for="exampleFormControlInput1">Gerne</label>
        <?php foreach ($this->genre as $genre) {?>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="gerne[]" value="<?=$genre["genre"]?>"> <?=$genre["genre"]?>
          </label>
        </div>
        <?php }?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Length</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="time" placeholder="Minute" value=""
          required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Studio</label>
        <select class="form-control" id="exampleFormControlSelect1" name="studio_name">
        <?php foreach ($this->studio_name as $std_name) {?>
        <option value="<?=$std_name["name"]?>"><?=$std_name["name"]?></option>
        <?php }?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">License Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="licese_price" placeholder="$" value=""
          required>
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
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des" placeholder="add Description"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Image</label>
        <input type="file" class="form-control-file border" rows="3" name="image" placeholder="add Description">
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
        </div>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>