
<head>
    <style>
        *{
            margin: auto;
            padding: 0;
        }
        /* #map {
            height:350px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        } */
        body{
          background-color: #212529;
          height: 100%;
          width: 100%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/layouts/group14/map.css">
</head>
<!-- <div id="map"></div> -->
<div class="container" style="width: 95%;">
<hr style="height:5px; visibility:hidden; margin-bottom:-1px; margin-top:0px" />
    <div id="map" style=" height: 50%; width: 100%;"></div>
    <hr style="height:2pt; visibility:hidden; margin-bottom:-1px; margin-top: 0px" />
    <div action="/group14/map/action" method="post">
        <div class=""><input class="" type="text" id="myInput" onkeyup="myFunction()" placeholder="  Search location..." style="width: 100%; height: 40px; border: none; border-radius: 6px; font-size: 17px; "/></div>
        <hr style="height:2pt; visibility:hidden; margin-bottom:-1px; margin-top:3px" />
        <div class="scrollable scrollbar-danger" style='height: 25%'>
            <div class="force-overflow" id="BtnContainer">
                <ul id="myUL" style="line-height: 10%">
                    <?php for ($i = 0; $i < count($this->guy); $i++) {?>
                        <li style="padding: 0px; margin: 0px;"><button id="bttn" type="button" onclick="bttnFunc(<?php echo ($i) ?>);" class="btn button btn-lg btn-block">
                            <?php echo ($this->guy[$i]['BranchName']); ?>
                        </button>
                        <hr style="height:1pt; visibility:hidden; margin-bottom:0px; margin-top:1px" /></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <hr style="height:2pt; visibility:hidden; margin-bottom:-1px; margin-top:2px" />
        <div><button id="confirmLoc" type="submit" name="" value="" class="btn button1 btn-lg btn-block" >Confirm</button></div>
    </div>
</div>
<br>

<script type="text/javascript">
     var map, infoWindow, test, locations;
    var collect = new Array();
    var locations = <?php echo json_encode($this -> guy); ?>;
    var selected = null;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
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
                icon: { url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png" }
            })
        }
        var marker ,i;
        var infowindow = new google.maps.InfoWindow();
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                title: locations[i][0],
                icon: { url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png" }
            });
            // marker.addListener('click', function() {
            //     infowindow.open(map, marker);
            // });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function(){
                    infowindow.setContent('<h2 id="firstHeading" class="firstHeading">'+locations[i][0]+'</h2>'+
            '<div><p>'+locations[i][4]+', '+locations[i][5]+', '+locations[i][6]+', '+locations[i][7]+', '+locations[i][8]+'</p></div>'+
            '<button id="confirmLoc" type="submit" style="float: right" onclick="bttnFunc('+i+');" value="'+locations[i][3]+'">Select Location</button>');
                    infowindow.open(map, marker);
                    changePos(i);
                }
            })(marker, i));
        }
    }
    function changePos(setLoc) {
        map.setCenter(new google.maps.LatLng(locations[setLoc][1], locations[setLoc][2]));
    }
    function myFunction() {
      // Declare variables
      var input, filter, ul, li, btt, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        btt = li[i].getElementsByTagName("button")[0];
        txtValue = btt.textContent || btt.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    var z,w;
    function bttnFunc(z){
        selected = z;
        changePos(z);
        document.getElementById("confirmLoc").value = locations[z][3];
        document.getElementById("confirmLoc").name = locations[z][3];
        console.log(document.getElementById("confirmLoc").value);
        console.log(document.getElementById("confirmLoc").name);
    }
    $("#confirmLoc").click(function(e){
        if(selected == null) {
            alert("Please Choose Branch");
            return;
        }
        //console.log(locations[selected])
        var branchID = locations[selected]["BranchID"];
        var branchName = locations[selected]["BranchName"];
        //console.log(branchID);
        if(!confirm("Confirm select branch " + branchName)) {
            return;
        }
        location.href = "/customer/group14/booking/92/" + branchID;
    });
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVya5jGbVLcFvCfHrR8yNKU7CPJhZ1eVI&callback=initMap"></script>

