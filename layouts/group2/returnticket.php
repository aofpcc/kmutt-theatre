<?php

?>

<head>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/layouts/group2/css/member/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">

</head>


	<!-- main -->
	<div class="main">
		<h1>KMUTT THEATRE | RETURN YOUR TICKET</h1>
		<div class="main-w3lsrow">
			<!-- check form -->
			<div class="login-form login-form-center">
				<div class="agile-row">
					<h2>ENTER MOVIE ID</h2>
					<i class="fa fa-lock"></i>
					<div class="clear"></div>
					<div class="login-agileits-top">
                        <form action="/emp/group2/check_return_ticket" method="post">
                            <input type="number" class="number" name="card_no" Placeholder="Card No." required/>
							<input type="number" class="number" name="return_no" Placeholder="Movie ID." required/>
							<input type="submit" value="Submit">
						</form>
					</div>

				</div>
			</div>
		</div>

					<div class="login-agileits-bottom1">
						<h3>OR</h3>
					</div>
					<div class="social_icons agileinfo">
						<ul class="top-links">
									<li><a href="/emp/group2/home" method="post" class="gohome"><i class="fas fa-arrow-alt-circle-left"></i> Go Back</a></li>
									<li><a href="/emp/group2/home/changeticket" method="post" class="change"><i class="fas fa-exchange-alt"></i> Change</a></li>
									<!-- <li><a href="#" class="no_member"><i class="fas fa-fighter-jet"></i> Reserve Now</a></li> -->
								</ul>
					</div>

	</div>