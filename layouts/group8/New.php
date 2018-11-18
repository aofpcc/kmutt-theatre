 <!DOCTYPE html>
<html>


    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">  

    <!-- Bootstrap core CSS -->
    <link href="/layouts/group8/DB2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/layouts/group8/DB2/css/business-frontpage.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">KMUTT Theatre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Movie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">

    
     <h2 class="text-center">Your Code->
    <input id="codeContent" type="text" value="<?php echo $this->rand; ?>" disabled />
    <!-- <button id="btn1">Sent</button> -->
    <?php
        if ($this->rand) {
            // echo 'YES';
        } 
        else {
            echo "<a class='button' href='/group8/gen'>Send</a>";
        }
    ?>
</h2>
</div>
  


    <script>
        $("#btn1").click(function()){
            alert('clicked!!');
            $.post("/group8/gen").done(function(data)){
                // $("#codeContent").val(data);
                alert(data);
            });
        });
    </script>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/layouts/group8/DB2/vendor/jquery/jquery.min.js"></script>
    <script src="/layouts/group8/DB2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>