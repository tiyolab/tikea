<!--
Author: W3layouts
Author URL: http:/w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http:/creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Govihar a Travel Agency Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- js -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/modernizr.custom.js"></script>
<!-- /js -->

<!-- /Custom Theme files -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/jquery.dataTables.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/style.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/JFFormStyle-1.css" type="text/css" rel="stylesheet"/>

<!-- fonts -->
<link href='/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='/fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- /fonts -->	

<!-- Respomsive slider -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/responsive-slider-parallax.css" rel="stylesheet">

<!-- controling tab -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/tab-style.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/prefixfree.min.js"></script>
<!-- controlling tab end -->

<!-- font awesome -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
<!-- font awesome end -->

<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/menu_jquery.js"></script>
<!--/pop-up-->

<!-- my yii style -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/yii_style.css" rel="stylesheet">
<!-- my yii style - END -->

</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<!--navbar-header-->
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Alamat Email</label>
													<input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Ingat saya</i></label>
											</fieldset>
											<span><a href="#">Lupa password anda?</a></span>
											<div class="or-grid">
												<p>OR</p>
											</div>
											<div class="social-sits">
												<div class="facebook-button">
													<a href="#">login dengan Facebook</a>
												</div>
												<div class="chrome-button">
													<a href="#">login dengan Google</a>
												</div>
												<div class="button-bottom">
													<p>Akun baru? <a href="signup.html">Buat akun</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--/header-->
	<!-- nav top -->
	<div class="nav-top">
		<div class="container">
			<div class="logo">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/ticketing-logo.png" alt="" />
			</div>
				<div class="top-nav">
					<span class="menu">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/menu.png" alt="" />
					</span>
					<ul class="nav1">
						<li class="<?php /*echo ($page_id == 'home') ? "active" : "";*/ ?>"><a href="<?php echo CHtml::normalizeUrl(array('home/index')); ?>">Home</a></li>
						<li class="<?php /*echo ($page_id == 'hotel') ? "active" : "";*/ ?>"><a href="hotels.html">Hotel</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('flight/index')); ?>">Tiket Pesawat</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('train/index')); ?>">Tiket Kereta Api</a></li>
						<li><a href="flights-hotels.html">Tiket Konser</a></li>
						<li><a href="flights-hotels.html">Kerja Sama</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- nav top end -->

	<?php echo $content; ?>

	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Our Products</h4>
						<ul>
							<li><a href="index.html">Flight Schedule</a></li>
							<li><a href="flights-hotels.html">City Airline Routes</a></li>
							<li><a href="index.html">International Flights</a></li>
							<li><a href="hotels.html">International Hotels</a></li>
							<li><a href="bus.html">Bus Booking</a></li>
							<li><a href="index.html">Domestic Airlines</a></li>
							<li><a href="holidays.html">Holidays Trip</a></li>
							<li><a href="hotels.html">Hotel Booking</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="terms.html">Terms &amp; Conditions</a></li>
							<li><a href="privacy.html">Privacy </a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="booking.html">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Travel Resources</h4>
						<ul>
							<li><a href="holidays.html">Holidays Packages</a></li>
							<li><a href="weekend.html">Weekend Getaways</a></li>
							<li><a href="index.html">International Airports</a></li>
							<li><a href="index.html">Domestic Flights Booking</a></li>
							<li><a href="booking.html">Customer Support</a></li>
							<li><a href="booking.html">Cancel Bookings</a></li>
							<li><a href="booking.html">Print E-tickets</a></li>
							<li><a href="booking.html">Customer Forums</a></li>
							<li><a href="booking.html">Make a Payment</a></li>
							<li><a href="booking.html">Complete Booking</a></li>
							<li><a href="booking.html">Assurance Claim</a></li>
							<li><a href="booking.html">Retail Offices</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>More Links</h4>
						<ul class="chf_footer_list">
							<li><a href="#">Flights Discount Coupons</a></li>
							<li><a href="#">Domestic Airlines</a></li>
							<li><a href="#">Indigo Airlines</a></li>
							<li><a href="#">Air Asia</a></li>
							<li><a href="#">Jet Airways</a></li>
							<li><a href="#">SpiceJet</a></li>
							<li><a href="#">GoAir</a></li>
							<li><a href="#">Air India</a></li>
							<li><a href="#">Domestic Flight Routes</a></li>
							<li><a href="#">Indian City Flight</a></li>
							<li><a href="#">Flight Sitemap</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Toll Free No : <span>1234-5678-901</span></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- /news-letter -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/app1.png" alt="" /></a></li>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/app2.png" alt="" /></a></li>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/app3.png" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 Govihar . Design by <a href="http:/w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
		</div>
	</div>


	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery-ui.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/script.js"></script>		
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.event.move.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/responsive-slider.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
			$('.xxx').datepicker({
				format : 'yyyy-mm-dd'
			});
			
		});
    </script>
</script>            
</body>
</html>