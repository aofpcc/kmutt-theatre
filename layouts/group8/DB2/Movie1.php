
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/layouts/group8/DB2/css/business-frontpage.css" rel="stylesheet">

  </head>

<br>
    <!-- Header with Background Image -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Movie1.jpg" alt=""class="center"> </a>
           
            </div>
          </div>
        </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">Buy ticket before 03:00 PM</h2>
          <p>Buy ticket before 03:00 PM 150/ticket</p>
          <p></p>
          <p>

         <?php
        if ($this->rand) {
            // echo 'YES';
        } 
        else {
            echo  "<a class='btn btn-primary btn-lg' href='/emp/group8/gen'>Get Code &raquo;</a>";
        }
          ?>
            
            
          </p>
        </div>
        
      </div>
      <!-- /.row -->

      
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->