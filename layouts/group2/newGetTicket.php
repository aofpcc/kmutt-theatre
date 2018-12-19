<?php

?>

<head>


    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="/layouts/group2/css/member/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">

</head>

<!-- main -->
<div class="main">
    <h1>KMUTT THEATRE | GET YOUR TICKET</h1>
    <div class="main-w3lsrow">
        <!-- check form -->
        <div class="login-form login-form-center">
            <div class="agile-row">
                <h2>ENTER Code</h2>
                <i class="fa fa-lock"></i>
                <div class="clear"></div>
                <div class="login-agileits-top">
                    <input id="code" type="text" class="form-control" placeholder="E.g. ASDFw23r">
                    <button id="btn-getticket" class="btn btn-danger">GET TICKET</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).keypress(function (e) {
        if (e.which == 13) {
            // alert('You pressed enter!');
            getTicket();
        }
    });
    
    $("#btn-getticket").click(function(e){
        getTicket();
    });

    function getTicket(){
        var val = $("#code").val();
        if(!val || val=="") {
            alert("Please Enter Code");
            return;
        }
        location.href = "/emp/ticket/get/" + val;
    }
</script>