<?php
include "serverConnection.php";
if (!(isset($_SESSION['login']))){
header ("Location:login.php");
} else if(isset($_SESSION['iAmLogged'] ) && ($_SESSION['admin'] == 1)){
$error="";
    
// Selecting Users:
$userinfo = "SELECT * FROM users";
$loginpage = mysqli_query($con, $userinfo) or die(mysqli_error($con));

// Selecting User Bookings for making a booking:
$userBookinginfo = "SELECT * FROM bookings";
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
								<li class="active"><a href="codes.php" class="link link--yaku"><span>A</span><span>D</span><span>M</span><span>I</span><span>N</span></a></li>
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
    <div id="bookNow">

    <h1> Book Now </h1>
        <form class="cd-form" action="process/adminBooking.php" method="post" id="classBooking">

        <p class="fieldset">
            <h3> Course Type:  </h3>
            <h5> All Bookings start on Mondays!   </h5>
            
            <label class="image-replace cd-email" for="signup-gender">User ID / Name</label>
                <!-- <input class="full-width has-padding has-border" id="signup-lastName" name="dateOfBirth" placeholder="Gender" required> -->
            <select class="full-width has-padding has-border" name="courseType" >
                <?php while($row = mysqli_fetch_array($loginpage)) { ?>
                  <option class="full-width has-padding has-border"  value="<?php $row['userID']; ?>"> <?php echo $row['userID']; ?>: <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>  </option>
                  <?php } ?>
                </select>
            
                <p><label class="image-replace cd-email" for="signup-gender">Course Type:</label>
                <!-- <input class="full-width has-padding has-border" id="signup-lastName" name="dateOfBirth" placeholder="Gender" required> -->
            <select class="full-width has-padding has-border" name="courseType" >
                  <option class="full-width has-padding has-border"  value="3">3 Day Course</option>
                  <option class="full-width has-padding has-border" value="10">10 Day Course</option>
                  <option class="full-width has-padding has-border" value="30">30 Day Course</option>
                </select>
                <!-- <span class="cd-error-message">Error message here!</span> -->
        
        </p>
    				</p>

         <p class="fieldset">
                    Course Start:
						<input class="full-width has-padding has-border" id="courseStart" name="courseStart" type="date" min="2016-08-01" max="2100-01-02" required>
						<!-- <span class="cd-error-message">Error message here!</span> -->

    <p class="fieldset">
						<input class="full-width has-padding" type="submit" name="bookNow" value="Book Now" ><p>
                        <input class="full-width has-padding" type="submit" name="back" value="Back" formaction="loggedin.php">
					</p>

    <span id="bookingError" >
        <b style="color:red;"><?php echo $_SESSION['message'];
        $_SESSION['message']= ""; ?></b>
        </span>

        
        
        
        
    <script>

var date = document.querySelector('[type=date]');
function yesMondays(e){

    //Dont allow user to book a previous date
    //http://stackoverflow.com/questions/17182544/disable-certain-dates-from-html5-datepicker
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("courseStart")[0].setAttribute('min', today);


    var day = new Date( e.target.value ).getUTCDay();
    // Days in JS range from 0-6 where 0 is Sunday and 6 is Saturday
    if( day != 1 ){
        e.target.setCustomValidity('Bookings only start on Mondays!');
    } else {
        e.target.setCustomValidity('');
    }
}
date.addEventListener('input',yesMondays);

        </script>
				</form>

    </div> <!-- end bookingDiv -->

<div id="myBookings">
    
<style> 
    table, tr, th, td {
    border: 1px solid black;
        text-align: center;
    }    
    th {
        min-width: 100px;
    }
</style>
    <table style="text-align: center;">
	<thead>
	<tr>
        <th>Booking ID</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Date Booked</th>
		<th>Course Start</th>
        <th>Course End</th>
        <th>Course Type</th>
	</tr>
	</thead>
	<tbody>
        <?php
    while($row = mysqli_fetch_array($bookingpage)) { ?>
	<tr>
        <td><?php echo strtoUpper($row['bookingID']) ?></td>
        <td><?php echo strtoUpper($row['userID']) ?></td>
        <td> Name here </td>
        <td><?php echo strtoUpper($row['date']) ?></td>
        <td><?php echo strtoUpper($row['courseStart']) ?> </td>
        <td><?php echo strtoUpper($row['courseEnd']) ?> </td>
        <td><?php echo strtoUpper($row['courseType']) ?> </td>
        <?php }  ?>

	</tr>

	</tbody>
</table>

    </div> <!-- end myBookings -->

    <!-- START deleteBooking ***** Booking can only be deleted if course is 10+ days away!!!! ***** -->
             <form action="process/deleteBooking.php" method="post" id="deleteBooking"
                   onSubmit="if(!confirm('Do you really want to cancel your booking?')){return false;}">
        <br><p> Wish to Cancel a booking? Select booking ID below and press delete:</p>
        <select name="deleteBooking">
            <option selected="true" disabled>Select Booking ID</option>
            <?php while($row = mysqli_fetch_array($bookingpage2)) { ?>
            <option> <?php echo strtoUpper($row['bookingID']); } ?></option>
    </select>
        <input type="submit" value="Cancel Booking" onClick="myFunction()">
        </form >
    <!-- END deleteBooking -->


    <!-- <select name="session_username" required >
        <option disabled>Select a User</option>
        < ?php
        while($row = mysqli_fetch_array($sessionUsername)) { ?>
        <option> < ?php echo strtoUpper($row['ps4_user']) ?></option>
        <option> < ?php echo strtoUpper($row['x1_user']) ?></option>
        < ?php } ?>
    </select> -->


</div> <!-- END container -->







<!--------------------------------------------------------------
----------------------------------------------------------------
-------------------------------------------------------------------
-------------------------------------------------------------------->
            
            
            
            
            
				
	
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