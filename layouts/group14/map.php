<head>
    <style>
        *{
            margin: auto;
            padding: 0;
        }
        #map {
            height:350px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/layouts/group14/map.css">
</head>
<!-- <div id="map"></div> -->
<div class="container">
    <div id="map"></div>
    <br>
    <div class="scrollable scrollbar-near-moon" style='height: 220px'>
        <div class="force-overflow">
            <?php for ($i = 0; $i < count($this->guy); $i++) {?>
            <button id="<?php echo ($this->guy[$i]['BranchID']) ?>" type="button" onclick="changePos(<?php echo ($i) ?>);"
                class="btn btn-info btn-lg btn-block">

                <?php echo ($this->guy[$i]['BranchName']); ?>
            </button>
            <?php }?>
        </div>
    </div>
</div>
<br>
<div class="container"><button onclick="location.href='something.php';" type="button" class="btn btn-success btn-lg btn-block">Confirm</button></div>
<script type="text/javascript">
    var map, infoWindow, test, locations;

    var locations = <?php echo json_encode($this -> guy); ?>;

    function initMap() {
        //[[13.651480,100.493436,"Tuk wit wah"],[13.650818, 100.494278,"common room"]];
        //{lat:13.651359,lng:100.4938318}

        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17,
            center: { lat: 13.651359, lng: 100.4938318 }
        });
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
                addMarker(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        function addMarker(posi) {
            marker = new google.maps.Marker({
                position: (posi),
                map: map,
                title: "Your are here",
                icon: { url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png" }
            })
        }
        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                title: locations[i][0],
                icon: { url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png" }
            });
        }

        for (i = 0; i < location.length; i++) {
            document.getElementById('#' + locations[i][3]).click(function () {
                map.changePos(google.maps.LatLng(locations[i][1], locations[i][2]));
            });
        }
    }

    function changePos(setLoc) {

        map.setCenter(new google.maps.LatLng(locations[setLoc][1], locations[setLoc][2]));
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVya5jGbVLcFvCfHrR8yNKU7CPJhZ1eVI&callback=initMap"></script>