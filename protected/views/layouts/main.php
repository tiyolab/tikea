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
<!-- /Custom Theme files -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/style.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/JFFormStyle-1.css" type="text/css" rel="stylesheet"/>
<!-- js -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/modernizr.custom.js"></script>
<!-- /js -->
<!-- fonts -->
<link href='/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='/fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- Respomsive slider -->
<!-- <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/responsive-slider.css" rel="stylesheet"> -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/responsive-slider-parallax.css" rel="stylesheet">

<!-- controling tab -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/user/tab-style.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/prefixfree.min.js"></script>
<!-- controlling tab end -->

<!-- font awesome -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
<!-- font awesome end -->

<!-- /fonts -->	
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
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="hotels.html">Hotel</a></li>
						<li><a href="holidays.html">Tiket Pesawat</a></li>
						<li><a href="flights-hotels.html">Tiket Kereta Api</a></li>
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
	<!-- Responsive slider - START -->
	<div class="responsive-slider-parallax" data-spy="responsive-slider" data-parallax="true" data-parallax-direction="1">
	  <div class="slides-container" data-group="slides">
	    <ul>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Responsive slider</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">With one to one swipe movement!</div>
	              </div>
	              <div class="caption img-html5" data-animate="slideAppearLeftToRight" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/html5.png">
	              </div>
	              <div class="caption img-css3" data-animate="slideAppearLeftToRight">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/css3.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Twitter Boostrap</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">Compatible!</div>
	              </div>
	              <div class="caption img-bootstrap" data-animate="slideAppearDownToUp" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/bootstrap.png">
	              </div>
	              <div class="caption img-twitter" data-animate="slideAppearUpToDown">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/twitter.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	      <li>
	        <div class="slide-body" data-group="slide">
	          <div class="container">
	            <div class="wrapper">
	              <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
	                <h2>Custom animations</h2>
	                <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">For any caption you use!</div>
	              </div>
	              <div class="caption img-jquery" data-animate="slideAppearDownToUp" data-delay="200">
	                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/jquery.png">
	              </div>
	            </div>
	          </div>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <a class="slider-control left" href="#" data-jump="prev">Prev</a>
	  <a class="slider-control right" href="#" data-jump="next">Next</a>
	  <div class="pages">
	    <a class="page" href="#" data-jump-to="1">1</a>
	    <a class="page" href="#" data-jump-to="2">2</a>
	    <a class="page" href="#" data-jump-to="3">3</a>
	  </div>
	</div>
	<main class="custom_tab">
		<input class="custom_tab" id="tab1" type="radio" name="tabs" checked>
		<label class="custom_tab" for="tab1">Hotel</label>
		    
		<input class="custom_tab" id="tab2" type="radio" name="tabs">
		<label class="custom_tab" for="tab2">Tiket Pesawat</label>
		    
		<input class="custom_tab" id="tab3" type="radio" name="tabs">
		<label class="custom_tab" for="tab3">Tiket Kereta Api</label>
		    
		<input class="custom_tab" id="tab4" type="radio" name="tabs">
		<label class="custom_tab" for="tab4">Tiket Konser</label>
		    
		<section class="custom_tab" id="content1">
			<div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input class="input-text full-width" placeholder="enter a destination or hotel name" type="text">
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>

                                                <div class="input-group input-append date">
									                <input type="text" class="form-control xxx" name="date" />
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>

                                            </div>
                                            <div class="col-xs-6">
                                                <label>Check Out</label>
                                                <div class="input-group input-append date">
									                <input type="text" class="form-control xxx" name="date" />
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Who</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                  	<select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width form-control">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button style="animation-duration: 1s; visibility: visible;" type="submit" class="full-width icon-check animated bounce" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
		</section>

		<section class="custom_tab" id="content2">
			<div class="tab-pane fade active in" id="flights-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input class="input-text full-width" placeholder="city, distirct or specific airpot" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input class="input-text full-width" placeholder="city, distirct or specific airpot" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="input-group input-append date">
									                <input type="text" class="form-control xxx" name="date" />
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="input-group input-append date">
									                <input type="text" class="form-control xxx" name="date" />
									                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									            </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input class="input-text full-width" placeholder="type here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
		</section>   

		<section class="custom_tab" id="content3">
		</section>    

		<section class="custom_tab" id="content4">
		</section>  
	</main>
	<!-- Responsive slider - END -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Goa Popular Hotels</a>
								<li class="dropdown active">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Goa</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Bangalore Popular Hotels</a>
								<li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a4.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangalore</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>							
							<li class="button"><a href="#">Bangkok Popular Hotels</a>
								 <li class="dropdown">
									<a href="products">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangkok</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$240</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Malaysia Popular Hotels</a>
								 <li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Malaysia</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$320</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Why Choose Us</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>09</h5>
									<span>Million</span>
								</div>
								<div class="choose-right">
									<a href="products.html">Aliquam faucibus vehicula vulputate</a>
									<p>Maecenas euismod tortor a tristique convallis diam eros aliquam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									<a href="products.html">Sed tincidunt consectetur augue</a>
									<p>Nulla bibendum libero in nunc eleifend tincidunt. Aliquam quis molestie lectus</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
									<a href="products.html">Nullam et arcu interdum, accumsan justo</a>
									<p>Maecenas dapibus eu purus vel imperdiet. Maecenas cursus, arcu sed tempus </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.html">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a2.jpg" alt="" />
							<div class="destinations-grid-info tours">
								<h5>Book your next Malaysia holiday!</h5>
								<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
								<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Destinations</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t1.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t2.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t3.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/t4.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
						<a href="products.html">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt="" />
							<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Latest News</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="single.html">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
									<div class="date-text">
										<a href="single.html">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div>
									<div class="date-text">
										<a href="single.html">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div>
									<div class="date-text">
										<a href="single.html">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div>
									<div class="date-text">
										<a href="single.html">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div>
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- /date -->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a4.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user/a1.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/user/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- /slider -->
		</div>
		<!-- /container -->
	</div>
	<!-- popular-grids -->
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
			$('.xxx').datepicker();
			
		});
    </script>
</script>            
</body>
</html>