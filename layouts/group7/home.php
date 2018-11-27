<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: black;
  color: white;
  padding: 15px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  /* position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px; */
}

/* The popup form - hidden by default */
.form-popup {
  /* background-color: rgba(255, 255, 255, 0.5); */
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 50%;
  /* bottom: 50%; */
  /* right: 15px; */
  border: 3px solid #f1f1f1;
  /* z-index: 9; */
}

/* Add styles to the form container */
.form-container {
  /* max-width: 500px; */
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .opacity {
  background-color: rgba(255, 255, 255, 0.5);
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.fa {
  padding: 15px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

#overlay {
    position: fixed; /* Sit on top of the page content */
    display: none; /* Hidden by default */
    width: 100%; /* Full width (cover the whole page) */
    height: 100%; /* Full height (cover the whole page) */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5); /* Black background with opacity */
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer; /* Add a pointer on hover */
}
</style>
</head>

<body>

<center><h2>Movie Together</h2></center>
<p>Share the movie and invite your friends now!!!</p>
<p>The things that you get is too many.</p>
<p> - Promotion</p>
<p> - Discount</p>
<p> - Blablablablabla</p>
<br><br><br>
<center><h2>Promotion Detail</h2></center>
<p>Promotion Description.</p>
<center>Shared With:
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<button class="open-button" onclick="openForm()">E-mail</button>
</center>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Invite your friends with E-mail</h1>

    <label for="to"><b>To</b></label>
    <input type="text" placeholder="Enter your friend's email" name="to" required>

    <label for="from"><b>From</b></label>
    <input type="text" placeholder="Enter your email" name="from" required>

    <label for="sub"><b>Subject</b></label>
    <input type="text" placeholder="Enter your subject" name="sub" required>

    <label for="note"><b>Description</b></label>
    <br>
    <textarea rows = "5" cols = "99" name = "description"></textarea>

    <button type="send" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movie Together</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  .form-container .opacity {
    background-color: rgba(255, 255, 255, 0.5);
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: black;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }

  .fa {
    padding: 15px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  </style>
</head>
<body>

<div class="container">
  <h2>Basic Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <center><h2>Movie Together</h2></center>
  <p>Share the movie and invite your friends now!!!</p>
  <p>The things that you get is too many.</p>
  <p> - Promotion</p>
  <p> - Discount</p>
  <p> - Blablablablabla</p>
  <br><br><br>
  <center><h2>Promotion Detail</h2></center>
  <p>Promotion Description.</p>
  <center>Shared With:
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">E-mail</button>
</center>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
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
          <textarea rows = "5" cols = "75" name = "description"></textarea>

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
