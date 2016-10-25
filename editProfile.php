<?php

include_once "serverConnection.php";


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
<link rel="stylesheet" href="css/lightbox.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<style>
a.button {
    background-color: #f44336; 
    border: none;
    color: white;
    padding: 12px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	border-radius: 7px;
	position: relative;
    right: -135px;
}

a.button:hover {
    background-color: #8B0000;
    color: white;
}
</style>
    
    
</head>
<body>
	<!--banner-->
	<div class="banner">
		<div class="effect5"><!--shadow effect-->
			<div class="container">
				<div class="logo">
					<h1><a href="index.php"><img src="images/logo.png" alt="" /></a></h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
								
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-center">
								<li><a href="loggedin.php"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
								<li class="active"><a href="profile.php" class="link link--yaku"><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span></a></li>
								<li><a href="bookings.php" class="link link--yaku"><span>B</span><span>O</span><span>O</span><span>K</span><span>I</span><span>N</span><span>G</span><span>S</span></a></li>
								<li><a href="gallery.php" class="link link--yaku"><span>G</span><span>A</span><span>L</span><span>L</span><span>E</span><span>R</span><span>Y</span></a></li></a></li>
								<li><a href="#contact" class="scroll link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
								<li><a href="process/logout.php" class="link link--yaku"><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span>L</span><span>O</span><span>G</span><span>O</span><span>U</span><span>T</span></a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--gallery-->
	<div class="gallery">		
	<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Edit Your Profile</h5>
      </div>
      <div class='panel-body'>
          <form action="process/processUpdateProfile.php" method="post">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_firstname'><br>First Name</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='firstName' name="firstName" value="<?php echo $_SESSION['firstName']; ?>" type='text' required>
                </div>
              </div>
			  </div>
			  <label class='control-label col-md-2 col-md-offset-2' for='id_lastname'><br>Last Name</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='id_lastname' name="lastName" value="<?php echo $_SESSION['lastName']; ?>" type='text' required>
                </div>
              </div>
			  </div>
              
              <label class='control-label col-md-2 col-md-offset-2' for='dateOfBirth'><br>D.O.B:</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='dateOfBirth' name="dateOfBirth" value="<?php echo $_SESSION['dateOfBirth']; ?>" type='date' required>
                </div>
              </div>
			  </div>
              
             <!-- <label class='control-label col-md-2 col-md-offset-2' for='gender'><br>Gender:</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                 <br><!-- <input class='form-control' id='firstName' name="gender" value="< ?php echo $_SESSION['gender']; ?>" type='radio' required> --
                    
                    <input id="male" type="radio" name="gender" value="male" checked="checked" required><label for="male"><span><span></span></span>Male</label>
                    <input id="female" type="radio" name="gender" value="female" required><label for="female"><span><span></span></span>Female</label>
                </div>
              </div>
			  </div> -->
              
              <label class='control-label col-md-2 col-md-offset-2' for='email'><br>Email:</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='email' name="email" value="<?php echo $_SESSION['email']; ?>" type='text' required>
                </div>
              </div>
			  </div>
              
          <label class='control-label col-md-2 col-md-offset-2' for='mobile'><br>Mobile:</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='mobile' name="mobile" value="<?php echo $_SESSION['mobile']; ?>" type='text' required>
                </div>
              </div>
			  </div>
              
		  <label class='control-label col-md-2 col-md-offset-2' for='id_address'><br>Address</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <br><input class='form-control' id='homeAddress' name="homeAddress" value="<?php echo $_SESSION['homeAddress']; ?>" type='text' required> 
                </div>
              </div>
			  </div>
		  <br>
          <!-- <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'><br>About you</label>
            <div class='col-md-6'>
              <br><textarea class='form-control' id='id_comments' placeholder='Tell us a bit about yourself...' rows='3'></textarea>
            </div>
          </div> -->
		  <br>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
             <br> <button class='btn-lg btn-primary' type='submit'>Confirm Changes</button>
            </div>
            <div class='col-md-3'>
              <br><a href="profile.php" class="button">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
        
        
			
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