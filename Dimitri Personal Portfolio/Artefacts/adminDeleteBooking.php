<?php
include "../serverConnection.php";

$userID = $_SESSION['userID'];
$bookingID = mysqli_real_escape_string($con,$_POST['deleteBooking']);


//Syntax
//DATEDIFF ( datepart , startdate , enddate )
// Finding how many days left till course
//$dateDiff = "SELECT * FROM bookings where DATEDIFF(day,'courseStart',GETDATE() )";

//SELECT DATEDIFF(day,'2014-06-05','2014-08-05') AS DiffDate




//Selecting booking sessions
$selectBooking = "DELETE FROM bookings WHERE bookingID = '$bookingID'"; //AND WHERE courseStart IS <10 days away from now
//AND courseStart = '$courseStart'";
$userBooking = mysqli_query($con, $selectBooking) or die(mysqli_error($con));
	
header('Location:../admin.php');

/*
***** Booking can only be deleted if course is 10+ days away!!!!
***** Booking can only be deleted if course is 10+ days away!!!!
***** Booking can only be deleted if course is 10+ days away!!!!
*/
?>


