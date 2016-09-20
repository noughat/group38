<?php

if (isset($_SESSION['loggedin'])){

header ("Location:loggedin.php");

}  
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Instinct Meditation</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bio Farming Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//mobile apps-->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>
<body>
	<!--banner-->
	<div class="banner">
		<div class="effect5"><!--shadow effect-->
			<div class="container">
				<div class="logo">
					<h1><a href="index.php"><img src="images/logo.png" alt="" /></a></h1>
				</div>
				<div class="banner-slider">
					<h2>Hello!</h2>
					<h3>Welcome to Instinct Meditation</h3>
					<h4>A fun way to become
						<div class="pushEffect">
							<span> Fitter</span>
							<span> Healthier</span>
							<span> Happier</span>
						</div>
					</h4>
				</div>
                
                            <!-- LOGIN FORM START --
            		<div class="login">
		<form action="process/processlogin.php" method="post">
				<input type="text" placeholder="Email" name="email"  required /><br>
				<input type="password" placeholder="Password" name="password"  required /> 
            
				<input type="submit" value="Login" name="loginplz">
            </form>
		<br> <a href="signup.php"> Dont have an account? Sign up </a>
		</div> <!-- END login --
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <!-- LOGIN FORM END -->
                
                
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
								
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-center">
								<li class="active"><a href="index.php"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
								<li><a href="profile.php" class="link link--yaku"><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span></a></li>
								<li><a href="bookings.php" class="link link--yaku"><span>B</span><span>O</span><span>O</span><span>K</span><span>I</span><span>N</span><span>G</span><span>S</span></a></li>
								<li><a href="gallery.php" class="link link--yaku"><span>G</span><span>A</span><span>L</span><span>L</span><span>E</span><span>R</span><span>Y</span></a></li>
								<li><a href="#contact" class="scroll link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
								<li><a href="login.php" class="link link--yaku"><span> &nbsp;&nbsp; &nbsp;</span><span>L</span><span>O</span><span>G</span><span>I</span><span>N</span><span>/</span><span>S</span><span>I</span><span>G</span><span>N</span><span>U</span><span>P</span></a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="title">Welcome</h3>
            <p>Instinct Meditation is your pathway to spirituality and tranquility </p>        
            
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/img1.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/img2.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
						
		</div>
	</div>
	<!--//welcome-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<h4>3 Day Classes </h4>
					<p>3 day classes will start on monday of each week and will run through till wednesday night </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<h4>10 Day Classes </h4>
					<p>10 day classes will start on every monday along with the three day classes but will run through until friday night of the following week </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
					</div>
					<h4>30 Day Classes  </h4>
					<p>30 day classes start on the 1st of each month and run through until the end of the month </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
					</div>
					<h4>Questions  </h4>
					<p>If you have any questions or are unsure about when classes will be starting please do no hesitate to contact us below </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!-- about-->
	<!--about-top-->
	<div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title">About Us</h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/img4.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Instinct Meditation is a place of peace and tranquility helping people achieve enlightenment </h4>
					<p>Instinct Meditation Centre is based in the heart of Brisbane city. This new City Centre provides a comfortable and relaxed environment in which people can discover the benefits of meditation for themselves.
					Instinct Meditation Centre is a not-for-profit organisation whose aim is to create peace and harmony within our world.  All proceeds are channelled towards this aim. Everyone is welcome to visit Instinct Meditation Centre.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
    <div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title">Our Instructors</h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/server1.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Bob Inman </h4>
					<p>Bob is one of the four founding instructors who are apart of Instinct Meditation. He is in charge of the organisation of the 30 day courses with the help of Rick.
					Bob is a very driven instructor who always has the goal of improving everyday people's health and showing them a pathway to peace.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title"></h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/server2.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Wendy Wu </h4>
					<p>Wendy is one of the four founding instructors who are apart of Instinct Meditation. She is in charge of the organisation of the 10 day courses.
					Wendy was driven to becoming an Instructor at our centre by her love of meditation and what it can offer a person's body, mind and soul.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title"></h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/server3.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Ethan Klien </h4>
					<p>Ethan is one of the four founding instructors who are apart of Instinct Meditation. He is in charge of the organisation of the 3 day courses.
					Ethan as a childhood friend of Bob was going through hard times in his life and was constantly stressed. Bob showed him how to clear his mind and become more peaceful through the use of meditation.
					This gave ethan the motivation to help other people and become an instructor himself.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title"></h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/server4.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Rick Harrison </h4>
					<p>Ethan is one of the four founding instructors who are apart of Instinct Meditation. He is in charge of the organisation of the 30 day courses with the help of Bob. Rick was the last to join our
					group of founders, but much like Ethan he was going through hard times in life and struggled to keep himself under control. It was suggested by one of his friends that he look into practicing meditation
					to help with this. As soon as he started he instantly fell in love with the practice leading to him helping found our centre.
					
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<!--//about-top-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="map">
			<iframe>allowfullscreen</iframe>
			<div class="map-color">
			</div>
		</div>
		<div class="contact-grids">
			
			<div class="col-md-5 contact-grid">
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-3 contact-grid">
				<div class="call">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>(07) 3138 2000</li>
							
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>2 George St,</li>
							<li>Brisbane City QLD 4000</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="mail">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>InstinctMeditation@outlook.com</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//contact-->
	<!--footer-->
	<div class="footer">
		<div class="footer-info">
			<div class="container">	
				<div class="icons">	
					<ul>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><img src="images/i1.png" alt=""/></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><img src="images/i2.png" alt=""/> </a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+"><img src="images/i3.png" alt=""/></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn"><img src="images/i4.png" alt=""/> </a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><img src="images/i5.png" alt=""/> </a></li>
					</ul>
					<script>$(function () {
					  $('[data-toggle="tooltip"]').tooltip()
					})</script>
				</div>
									
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>