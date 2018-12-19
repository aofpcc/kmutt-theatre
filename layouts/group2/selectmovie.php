<?php

?>


<head>

    <style type="text/css">
        svg,
        img {
            width: 20px;
        }
    </style>
    <link rel="preload" href="/layouts/group2/js/selectmovie/manifest.86920d2276921dc8f875.js" as="script">
    <link rel="preload" href="/layouts/group2/js/selectmovie/vendor.eb91d5bf77b2c769fcc2.js" as="script">
    <link rel="preload" href="/layouts/group2/js/selectmovie/app.baa2eadcab44e34fea36.js" as="script">

    <link rel="prefetch" href="/layouts/group2/js/selectmovie/1.2ab249ca75db547f0487.js">
    <link rel="stylesheet" href="/layouts/group2/css/maincss/common.baa2eadcab44e34fea36.css">
    <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/selectmovie/1.2ab249ca75db547f0487.js"></script>


</head>

<body>

    <div id="app" class="is-grayscale">

        <div id="main" class="home">
            <div class="top-wrapper">
                <div class="showtime-bar">
                    <div class="container">

                    </div>
                </div>
                <div class="section section-movies ov-gap">
                    <div class="container">
                        <div class="section-header">
                            <h1 class="heading">MOVIE</h1>
                        </div>
                        <div class="tab-list">
                            <ul>
                                <li><a href="#" class="active">Now Showing</a></li>
                                <!-- <li><a href="#" class="">Pre Booking</a></li> -->
                            </ul>
                        </div>


                        <div class="row">
                            <?php foreach($this->movies as $movie) { ?>

                            <div class="col-sm equal-column column-movie grid-movies" style="min-height: 2741.91px;">
                                <div class="flex-wrapper movies-wrapper movies-now-showing">

                                    <div class="movie-card flex-item" type="now-showing"><a href="/emp/group2/home_page/select_movie/branch/<?=$movie["id"]?>"
                                            class="" title="อควาแมน เจ้าสมุทร">
                                            <div class="poster">
                                                <div class="image" style="background-image: );" src="<?=$movie["Image"] ?>"></div>
                                                <div class="ribbon advance-ticket" style=""><span>Advance Ticket</span></div>
                                            </div>
                                            <div class="info">

                                                <p class="release-date"><span class="text">Date: </span><span class="date">2018-12-13</span></p>
                                                <h2 class="name">
                                                    <?=$movie["title"] ?>
                                                </h2>

                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</body>