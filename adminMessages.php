<?php
include "serverConnection.php";

if (!(isset($_SESSION['login']))){
header ("Location:login.php");
} else if(isset($_SESSION['iAmLogged'] )){
    
    
    if($_SESSION['admin'] == 1) {
        $navText = "<li class='active'><a href='admin.php' class='link link--yaku'><span>A</span><span>D</span><span>M</span><span>I</span><span>N</span></a></li>";
    } else if($_SESSION['iAmLogged'] == 0) {
        $navText = "<li><a href='bookings.php' class='link link--yaku'><span>B</span><span>O</span><span>O</span><span>K</span><span>I</span><span>N</span><span>G</span><span>S</span></a></li>";
    }
        
$error="";
    
// Selecting Users:
$userinfo = "SELECT * FROM users";
$loginpage = mysqli_query($con, $userinfo) or die(mysqli_error($con));
    

// Selecting messages Bookings for viewing:
$userBookinginfo = "SELECT * FROM messages ORDER BY messageDate DESC";
$bookingpage = mysqli_query($con, $userBookinginfo) or die(mysqli_error($con));  
    
// Selecting User Bookings for deletion:
$userBookinginfo2 = "SELECT * FROM bookings";
$bookingpage2 = mysqli_query($con, $userBookinginfo2) or die(mysqli_error($con));     
    
$check10Days = "SELECT * FROM bookings 
WHERE now() <= courseStart ";  
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
<link href="css/styletable.css" type="text/css" rel="stylesheet" media="all">
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
								<li><a href="profile.php" class="link link--yaku"><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span></a></li>
								<!-- BOOKING HERE --><?php echo $navText; ?>
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
	<!--Shortcodes-page -->
	<div class="codes">
		<div class="container">
			<h3 class="title">Admin</h3>
            
<!-- --------------------------------------------------------------------------
-------------------------------------------------------------------------------
---------------------------------------------------------------------------------
------------------------------------------------------------------------------->
<div id="container">
<div id="adminTitle">
    <hr>             
    <a href="admin.php"> Course Bookings </a></b> |
    <b><a href="adminMessages.php"> Messages </a></b> |
    <a href="adminServers.php"> Server Bookings </a> 
    <hr> 
</div>
<br>
 
<div id="myBookings">

	<div class="tablepos">
    <table>
	<thead>
	<tr>
        <th>M-ID</th>
        <th>User ID </th>
        <th>Date</th>
		<th>Message</th>
        <th>Resolved</th>
        <th></th>
	</tr>
	</thead>
	<tbody>
        <?php
    while($row = mysqli_fetch_array($bookingpage)) { ?>
	<tr>
        <td><?php echo strtoUpper($row['messageID']) ?></td>
        <td><a href="adminMessagesUser.php?messageUserID=<?php echo $row['userID']?>"> <?php echo strtoUpper($row['userID']) ?></a></td> 
        <td><?php echo strtoUpper($row['messageDate']) ?></td>
        <td><?php echo strtoUpper($row['message']) ?> </td>
        
        <?php if($row['responded'] == 1) {
        $responded = "Yes";
        } else if($row['responded'] == 0){
            $responded = "No"; 
        } ?>
        <td><?php echo $responded; //echo strtoUpper($row['responded']) ?> </td>
        <td> <button><a href="process/adminMessageResponded.php?messageResponded=<?php echo $row['responded']?>&messageID=<?php echo $row['messageID']?>"> Resolve </a></button></td>
        <?php }  ?>
	</tr>
	</tbody>
</table>
</div>

    </div> <!-- end myBookings -->
<br><br>
</div> <!-- END container -->
</div>




<!--------------------------------------------------------------
----------------------------------------------------------------
-------------------------------------------------------------------
-------------------------------------------------------------------->
                    
				
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