<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movie Together</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="/layouts/group7/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
<div class="container">
  <center><h2>Movie Together</h2></center>
  <p>Share the movie and invite your friends now!!!</p>
  <p>The things that you get is too many.</p>
  <p> - Promotion</p>
  <p> - Discount</p>
  <p> - Blablablablabla</p>
  <br><br><br>
  <center><h2>Promotion Detail</h2></center>
  <p>Promotion Description.</p>
  <p>Shared With: <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
  <a class="a2a_button_facebook"></a>
  <a class="a2a_button_twitter"></a>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">E-mail</button>
</div> </p>
</center>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Share to your friend with an email</h4>
        </div>
        <div class="modal-body">
          <label for="to"><b>To</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="Enter your friend's email" name="to" required>
          <br>
          <label for="from"><b>From</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="Enter your email" name="from" required>
          <br>
          <label for="sub"><b>Subject</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="Enter your subject" name="sub" required>
          <br>
          <label for="note"><b>Description</b></label>
          <br>
          <textarea rows = "5" cols = "60" name = "description"></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>
