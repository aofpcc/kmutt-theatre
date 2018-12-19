<head>
  <title><?=$this->passValue["title"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        .table-wrapper-scroll-y {
        display: block;
        max-height: 200px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>
</head>

<!-- Page Content -->
<div class="main">

    <!-- Page Heading -->
    <h1 class="my-4">
        <button title="Copied" id="getCode" type="button" class="btn btn-lg btn-danger">Get Code</button>
        <small>Code :
            <span id="code">
                <?=$this->invite_data["code"]?></span></small>
    </h1>
    <div class="card card-temp shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="<?= $this->image ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>Movie Name: <?= $this->title ?></h4>
                    <h6>Date: <?= $this->startDate ?></h6>
                    <h6>Time: <?= $this->startTime ?></h6>
                    <h6>Genre: <?= $this->genre ?></h6>
                    <h6>Length: <?=$this->length ?></h6><br><br>
                    <div class="container col-xs-10">
                        <h2>List</h2>
                        <div class="table-wrapper-scroll-y ">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 1;
                                    foreach($this->invite_data["list"] as $person) { ?>
                                    <tr>
                                        <th scope="row"><?=$count?></th>
                                        <td><?=$person["Name"]?></td>
                                        <td><?=$person["Phone"]?></td>
                                        <td><?=$person["Email"]?></td>
                                    </tr>
                                    <?php
                                    $count++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <br>
                    <button title="Leave" id="leave" type="button" class="btn btn-lg btn-danger"
                    onclick="location.href = '/customer/kmutt_home'">LEFT PARTY
                  </button> -->
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <hr>
</div>
<script>
    $("#getCode").click(function (e) {
        CopyToClipboard("code");
    });

    $("$leave").click(function (e) {
      Leave();
    })

    function CopyToClipboard(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");
            // tool tip
            alert("Code Copied");
        }
    }

    function Leave() {

    }

</script>

<br><br>
