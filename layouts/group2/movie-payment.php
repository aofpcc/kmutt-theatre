<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>KMUTT Theatre</title>
<link href="/layouts/group2/css/booking/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/layouts/group2/css/booking/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="/layouts/group2/js/jquery.min.js"></script>
<script src="/layouts/group2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="/layouts/group2/css/booking/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/layouts/group2/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="/layouts/group2/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="/layouts/group2/css/booking/font-awesome.min.css" />
<link rel="stylesheet" href="/layouts/group2/css/booking/menu.css" />
<script src="/layouts/group2/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
[endif]
<!-- start-smoth-scrolling---->
<script type="text/javascript" src="/layouts/group2/js/move-top.js"></script>
<script type="text/javascript" src="/layouts/group2/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!-- start-smoth-scrolling---->
</head>
<body>
	<!-- header-section-starts -->

		<div class="header-top-strip" id="home">
			<div class="container">
				<div class="header-top-right">
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Member Checking</button>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">
							KMUTT THEATRE</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#Login" data-toggle="tab">Reseves</a></li>
									<li><a href="#Registration" data-toggle="tab">Return Ticket</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="Login">
										<form role="form" class="form-horizontal">
											<div class="form-group">
												<label for="email" class="col-sm-2 control-label">
													Card No.</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="email1" placeholder="Enter Your Card No." />
												</div>
											</div>
											<!-- <div class="form-group">
																	<label for="exampleInputPassword1" class="col-sm-2 control-label">
																			Password</label>
																	<div class="col-sm-10">
																			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" />
																	</div>
															</div> -->
											<div class="row">
												<div class="col-sm-2">
												</div>
												<div class="col-sm-10">
													<button type="submit" class="btn btn-primary btn-sm">
														Submit</button>
													<!-- <a href="javascript:;">Forgot your password?</a> -->
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="Registration">
										<form role="form" class="form-horizontal">
											<div class="form-group">
												<label for="email" class="col-sm-2 control-label">
													Card No.</label>
												<div class="col-sm-10">
													<div class="row">
														<!-- <div class="col-md-3">
																							<select class="form-control">
																									<option>Mr.</option>
																									<option>Ms.</option>
																									<option>Mrs.</option>
																							</select>
																					</div> -->
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="Enter Your Card No." />
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="email" class="col-sm-2 control-label">
													Movies Name</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="email" placeholder="Enter the Movies Name" />
												</div>
											</div>
											<!-- <div class="form-group">
																	<label for="mobile" class="col-sm-2 control-label">
																			Mobile</label>
																	<div class="col-sm-10">
																			<input type="email" class="form-control" id="mobile" placeholder="Mobile" />
																	</div>
															</div> -->
											<!-- <div class="form-group">
																	<label for="password" class="col-sm-2 control-label">
																			Password</label>
																	<div class="col-sm-10">
																			<input type="password" class="form-control" id="password" placeholder="Password" />
																	</div>
															</div> -->
											<div class="row">
												<div class="col-sm-2">
												</div>
												<div class="col-sm-10">
													<button type="button" class="btn btn-primary btn-sm">
														Continue</button>
													<!-- <button type="button" class="btn btn-default btn-sm">
																					Cancel</button> -->
												</div>
											</div>
										</form>
									</div>
								</div>
								<div id="OR" class="hidden-xs">
									OR</div>
							</div>
							<div class="col-md-4">
								<div class="row text-center sign-with">
									<div class="col-md-12">
										<!-- <h3 class="other-nw">
																	Sign in with</h3> -->
									</div>
									<div class="col-md-12">
										<div class="btn-group btn-group-justified">
											<a href="#" class="btn btn-primary">Change Ticket</a>
											<!-- <a href="#" class="btn btn-danger">Google +</a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script>
$('#myModal').modal('no');
</script>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container">
		  <div class="main-content">
			<div class="header">
				<div class="logo">
					<a href="movie-payment.html"><h1>Payment</h1></a>
				</div>
				<!-- <div class="search">
					<div class="search2">
					  <form>
						<i class="fa fa-search"></i>
						 <input type="text" value="Search for a movie, play, event, sport or more" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for a movie, play, event, sport or more';}"/>
					  </form>
					</div>
				</div> -->
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation">
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->

            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <!-- Mega Menu -->
					<li class="dropdown w3_megamenu-fw"><a href="movies.html">Movies</a>
                        <!-- <ul class="dropdown-menu fullwidth"></ul> -->
                    </li>
					<li class="dropdown w3_megamenu-fw"><a href="movie-select-show.html">Reserve</a>

					</li>
					<li class="active"><a href="movie-payment.html">Payment</a>

					</li>
					<li class="dropdown w3_megamenu-fw"><a href="#"">Sports</a>
							 <!-- <ul class="dropdown-menu half3">
                            <li class="w3_megamenu-content withoutdesc">
                                <div class="row">
								<h5 class="movies-page">for sports page - <a href="sports.html">Click here</a> </h5>
								<h3 class="title">Featured Sports</h3>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.html"><img src="/layouts/group2/images/booking/me1.jpg" alt="" /></a>
									<a class="plays-go" href="#">Volleyball is a team sport</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.html"><img src="/layouts/group2/images/booking/me2.jpg" alt="" /></a>
									<a class="plays-go" href="#">Chase, we're going to win races.</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.html"><img src="/layouts/group2/images/booking/me3.jpg" alt="" /></a>
									<a class="plays-go" href="#">2015 The action or activity of skating on ice skates</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.html"><img src="/layouts/group2/images/booking/me4.jpg" alt="" /></a>
									<a class="plays-go" href="#">SVM Bowling & Gaming</a>
								</div>
							</div>
                                    </div>
                                </div>
                            </li>
                        </ul> -->
                       <!-- end dropdown-menu -->
					</li>
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
								</li>
				                </ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form id="contact1" action="#" name="contactform" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name1" class="form-control" placeholder="Name">
                                        <input type="text" name="email" id="email1" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone1" class="form-control" placeholder="Phone">
                                        <input type="text" name="subject" id="subject1" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments1" rows="6" placeholder="Your Message ..."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-right">
                                            <input type="submit" value="SEND" id="submit1" class="btn btn-primary small">
                                        </div>
                                    </div>
									<div class="clearfix"></div>
                                </form>
                            </li>
                        </ul>
					</li>
				</ul><!-- end nav navbar-nav navbar-right -->
			</div><!-- end #navbar-collapse-1 -->

			</nav><!-- end navbar navbar-default w3_megamenu -->
		</div><!-- end container -->

<!-- AddThis Smart Layers END -->

		<div class="e-payment-section">
			<div class="col-md-8 payment-left">
				<div class="confirm-details">
					<h3>Confirm Your Contact Details</h3>
					<input type="text" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address';}">
					<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}">
					<!-- <p><i>Your number will be used for transaction confirmations & none of those painful promotions.</i></p> -->
					<!-- <div class="c-lang">
						<input type="checkbox" id="c1" name="cc">
						<label class="lang">International number?</label>
					</div> -->
					<!-- <div class="c-lang">
						<input type="checkbox" id="c1" name="cc">
						<label class="lang">Keep me updated on the latest in entertainment, offers and much more</label>
					</div> -->
				</div>
				<div class="payment-options">
					<h3>payment-options</h3>
					<div class="tabs-box">
					<ul class="tabs-menu booking-menu">
						<li><a href="#tab1">Debit/Credit Card</a></li>
						<li><a href="#tab2">Credit Card EMI</a></li>
						<li><a href="#tab3">Net Banking</a></li>
						<li><a href="#tab4">PayPal</a></li>
					</ul>
					<div class="clearfix"> </div>
					<div class="tab-grids event-tab-grids">
						<div id="tab1" class="tab-grid">
							<img src="/layouts/group2/images/booking/payment.png" alt="payment" />
							<input type="text" class="payment" value="Enter Your Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Card Number';}">
							<input type="text" class="payment" value="Your Name On Card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name On Card';}">
							<p>Expiry:<select class="month">
														<option value="">Select</option>
														<option value="01">Jan</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">May</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
													<select class="year">
														<option value="">Year</option>
														<option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option><option value="2068">2068</option><option value="2069">2069</option><option value="2070">2070</option><option value="2071">2071</option><option value="2072">2072</option><option value="2073">2073</option><option value="2074">2074</option></select>
														<input type="text" class="cvv" value="cvv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cvv';}">
														</p>
														<input type="submit" class="go-to-pay" value="make payment">
						</div>
						<div id="tab2" class="tab-grid">
							<p>Currently available for ICICI Bank Credit Cardholders only.</p>
							<input type="text" class="payment" value="Enter Your Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Card Number';}">
						</div>
						<div id="tab3" class="tab-grid">
							<h4>Net Banking</h4>
							<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">ICICI bank</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">HDFC bank</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">SBI bank</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">IDBI bank</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">AXIS bank</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc">
					<label class="lang">KOTAK bank</label>
				</div>
							<p>Select Other Banks :<select class="year"><option value="">=== Other Banks ===</option><option value="ALB-NA">Allahabad Bank NetBanking</option><option value="ADB-NA">Andhra Bank</option><option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option><option value="BBC-NA">Bank of Baroda Corporate NetBanking</option><option value="BBR-NA">Bank of Baroda Retail NetBanking</option><option value="BOI-NA">Bank of India NetBanking</option><option value="BOM-NA">Bank of Maharashtra NetBanking</option><option value="CSB-NA">Catholic Syrian Bank NetBanking</option><option value="CBI-NA">Central Bank of India</option><option value="CUB-NA">City Union Bank NetBanking</option><option value="CRP-NA">Corporation Bank</option><option value="DBK-NA">Deutsche Bank NetBanking</option><option value="DCB-NA">Development Credit Bank</option><option value="DC2-NA">Development Credit Bank - Corporate</option><option value="DLB-NA">Dhanlaxmi Bank NetBanking</option><option value="FBK-NA">Federal Bank NetBanking</option><option value="IDS-NA">Indusind Bank NetBanking</option><option value="IOB-NA">Indian Overseas Bank</option><option value="ING-NA">ING Vysya Bank (now Kotak)</option><option value="JKB-NA">Jammu and Kashmir NetBanking</option><option value="JSB-NA">Janata Sahakari Bank Limited</option><option value="KBL-NA">Karnataka Bank NetBanking</option><option value="KVB-NA">Karur Vysya Bank NetBanking</option><option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option><option value="OBC-NA">Oriental Bank of Commerce NetBanking</option><option value="CPN-NA">PNB Corporate NetBanking</option><option value="PNB-NA">PNB NetBanking</option><option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option><option value="RBS-NA">RBS (The Royal Bank of Scotland)</option><option value="SWB-NA">Saraswat Bank NetBanking</option><option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option><option value="SBH-NA">SB Hyderabad NetBanking</option><option value="SBM-NA">SB Mysore NetBanking</option><option value="SBT-NA">SB Travancore NetBanking</option><option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option><option value="SIB-NA">South Indian Bank NetBanking</option><option value="SBP-NA">State Bank of Patiala NetBanking</option><option value="SYD-NA">Syndicate Bank NetBanking</option><option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option><option value="UCO-NA">UCO Bank NetBanking</option><option value="UBI-NA">Union Bank NetBanking</option><option value="UNI-NA">United Bank of India NetBanking</option><option value="VJB-NA">Vijaya Bank NetBanking</option></select></p>
						</div>
						<div id="tab4" class="tab-grid">
							<div class="row">
                        <div class="col-md-6">
                            <img class="pp-img" src="/layouts/group2/images/booking/paypal.png" alt="Image Alternative text" title="Image Title">
                            <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p><a class="btn btn-primary">Checkout via Paypal</a>
                        </div>
                        <div class="col-md-6">
                            <form class="cc-form">
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-number">
                                        <label>Card Number</label>
                                        <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text"><span class="cc-card-icon"></span>
                                    </div>
                                    <div class="form-group form-group-cc-cvc">
                                        <label>CVV</label>
                                        <input class="form-control" placeholder="xxxx" type="text">
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-name">
                                        <label>Card Holder Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group form-group-cc-date">
                                        <label>Valid Thru</label>
                                        <input class="form-control" placeholder="mm/yy" type="text">
                                    </div>
                                </div>
                                <div class="checkbox checkbox-small">
                                    <label>
                                        <input class="i-check" type="checkbox" checked="">Add to My Cards</label>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Proceed Payment">
                            </form>
                        </div>
                    </div>
						</div>
							</div>
					<div class="clearfix"> </div>
				</div>
	<!--start-carrer-->
	<!--- Comman-js-files ----->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$("#tab4").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>

				</div>
			</div>
			<div class="col-md-4">
			<div class="payment-right">
				<h3>Ticket Summary</h3>
				<h6><span>Movie Name:</span>Movie selected</h6>
				<p><span>Theatre:</span> Theatre No. </p>
				<!-- <p><span>Lake:</span> Kerala</p>
				<p><span>Location:</span> Trivandrum, Trivandrum</p> -->
				<p><span>Date:</span> Dayname, dd MMM, yyyy</p>
				<p><span>Time:</span> hh:mm am</p>
				<p><span>Seat No.:</span> E3,E4,E5</p>
				<p><span>Qty:</span> 4</p>
				<h4><span>Total : </span>00.00 THB</h4>
				<p>+ (Internet handling fees : 7% (incl. of Service Tax))</p>
				<h5>Grand Total : 000.00 THB</h5>
			</div>
			<div class="ticket-note">
				<h3>Note:</h3>
				<ol>
					<li><p>Registrations/Tickets once booked cannot be exchanged, cancelled or refunded.</p></li>
					<li><p>In case of Credit/Debit Card bookings, the Credit/Debit Card and Card holder must be present at the ticket counter while collecting the ticket(s).</p></li>
				</ol>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<!-- <div class="footer">
			<div class="col-md-3 footer-left">
				<div class="f-mov-list">
					<h4>Latest Movies</h4>
					<ul>
						<li><a href="now-showing.html">Now Showing</a></li>
						<li><a href="comming-soon.html">Coming Soon</a></li>
						<li><a href="celebrities.html">Movie Celebrities</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="f-mov-list">
					<h4>Movie Reviews</h4>
					<ul>
						<li><a href="404.html" target="target_blank">Entertainment News</a></li>
						<li><a href="blog.html" target="target_blank">Rajeev Masand</a></li>
						<li><a href="blog.html" target="target_blank">Film Reviews</a></li>
						<li><a href="write-us.html" target="target_blank">Guest Blogging</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="f-mov-list">
					<h4>Movie Trailers</h4>
					<ul>
						<li><a href="trailers-now-showing.html">Now Showing</a></li>
						<li><a href="trailers-comming-soon.html">Coming Soon</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				</div>
			<div class="col-md-3 footer-left">
				<div class="f-mov-list">
					<h4>Cinemas & Regions</h4>
					<ul>
						<li><a href="regions.html">All Regions</a></li>
						<li><a href="cinema-chain.html">Cinema Chains</a></li>
						<li><a href="cinemas.html">Cinemas</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="f-mov-list">
					<h4>Movies by Language</h4>
					<ul>
						<li><a href="movies.html">Hindi</a></li>
						<li><a href="movies.html">English</a></li>
						<li><a href="movies.html">Marathi</a></li>
						<li><a href="movies.html">Bengali</a></li>
						<li><a href="movies.html">Tamil</a></li>
						<li><a href="movies.html">Telugu</a></li>
						<li><a href="movies.html">Malayalam</a></li>
						<li><a href="movies.html">Bhojpuri</a></li>
						<li><a href="movies.html">Kannada</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				</div>
			<div class="col-md-3 footer-left">
				<div class="f-mov-list">
					<h4>Exclusives</h4>
					<ul>
						<li><a href="donate.html">Book A Smile</a></li>
						<li><a href="vochers.html">Corporate Vouchers</a></li>
						<li><a href="gift-cards.html">Gift Cards</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="f-mov-list">
					<h4>Help</h4>
					<ul>
						<li><a href="site-map.html">Sitemap</a></li>
						<li><a href="feed-back.html">Feedback</a></li>
						<li><a href="faq.html">FAQs</a></li>
						<li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
						<li><a href="privacy-policy.html">Privacy Policy</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 footer-left">
				<div class="f-mov-list">
					<h4>Movies by Genre</h4>
					<ul>
						<li><a href="movies.html">Action</a></li>
						<li><a href="movies.html">Romance</a></li>
						<li><a href="movies.html">Comedy</a></li>
						<li><a href="movies.html">Adult</a></li>
						<li><a href="movies.html">Adventure</a></li>
						<li><a href="movies.html">Classic</a></li>
						<li><a href="movies.html">Crime</a></li>
						<li><a href="movies.html">Drama</a></li>
						<li><a href="movies.html">Family </a></li>
						<li><a href="movies.html">Fantasy</a></li>
						<li><a href="movies.html">Musical</a></li>
						<li><a href="movies.html">Mystery</a></li>
						<li><a href="movies.html">Suspense</a></li>
						<li><a href="movies.html">Thriller</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
			<div class="footer-right">
				<div class="follow-us">
					<h5 class="f-head">Follow us</h5>
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="subscribe">
					<h5 class="f-head">Subscribe to our newsletters</h5>
					<input type="text" class="text" value="Enter Email ID" onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') {this.value = 'Enter Email ID';}">
					<input type="submit" value="submit">
					<div class="clearfix"></div>
				</div>
				<div class="recent_24by7">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog" href="#"><i class="fa fa-calendar-o"></i>Resend Booking Confirmation</a>
					<a href="support.html"><i class="fa fa-question"></i>24/7 Customer Care</a>
				</div>
					<div class="clearfix"></div>
			</div>
			</div>
			<div class="clearfix"></div>
			</div> -->
			<div class="clearfix"></div>
		</div>
			<div class="copy-rights text-center">
				<p>KMUTT Theatre | CSC318 </p>
			</div>

 <script src="/layouts/group2/js/responsive-tabs.js"></script>
    <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
				<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
