<head>
    <style>
        .box_tab {
            height: 100vh;
            border: 2px solid black;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .center {
            text-align: center;
        }

        .box-movie {
            color: white;
            text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;

            text-align: left;
            padding-left: 20%;
            min-height: 200px;
            min-width: 100%;
            color: white;
        }

        .box-movie:nth-child(even) {
            background-color: rgb(232,121,23);
            border: 1px solid black;
        }

        .box-movie:nth-child(odd) {
            background-color: yellow;
            border: 1px solid black;
        }

        .box-showtime {
            color: white;
            text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;

            text-align: left;
            padding-left: 20%;
            min-height: 100px;
            min-width: 100%;
            color: white;
        }

        .box-showtime:nth-child(even) {
            background-color: darkblue;
            border: 1px solid black;
        }

        .box-showtime:nth-child(odd) {
            background-color: darkgoldenrod;
            border: 1px solid black;
        }

        .all-movies {
            overflow-y: scroll;
        }
    </style>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid;
  width: 80%;
  min-width: 1100px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>
<script src="/layouts/group1/js/jquery.seat-charts.js"></script>

<link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link rel="stylesheet" href="/layouts/group1/css/onStyle.css"> -->
<script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
<script src="/layouts/group1/js/jquery.seat-charts.js"></script>
<script>
        document.getElementById("body").classList.add('container-fluid');
        document.getElementById("body").classList.remove('container');
    </script>
<div class="row">
    <div class="col-xs-6 col-lg-6 box_tab container-fluid all-movies">
        <?php foreach($this->movies as $movie) { ?>
        <button class="btn box-movie" onclick="selectMovie(<?=$movie['id']?>);">
            <?=$movie["title"]?></button>
        <?php } ?>
    </div>
    <div class="col-xs-6 col-lg-6 box_tab" id="allbranch">
        
    </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" id="select_seat">
      
  </div>
</div>
<script>
    var selectedSeatJa = [];
    // console.log(selectedSeatJa);
    // $("#allbranch").click(function(){
        
    // });
    $(".close").click(function(){
        $(".modal").hide();
    });

    function selectMovie(i) {
        $("#allbranch").empty();

        var branch_id = <?=$this->branch_id?>;
        console.log(i + " " + branch_id);
        $.get("/emp/ticket/" + branch_id + "/" + i).done(function (data) {
            $("#allbranch").html(data);
        })
    }

    function show(code) {
        var x = "<a href='/emp/ticket/get/"+code+"' target='_blank'>________________________________________________________________________GET__CODE_____________________________________________________________________</a>";
        $("#select_seat").empty();
        $("#select_seat").html(x);
    }

    function selectShowTime(i) {
        // console.log(i);
        $("#select_seat").empty();
        $.get("/emp/ticket/showtime/"+i).done(function(html){
            $("#select_seat").html(html);
        }).fail(function(err){
            // console.log(err);
        }).always(function(){
            $(".modal").show(); 
        });
    }
</script>