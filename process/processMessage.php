<?php
  include "../serverConnection.php";
$userID = $_SESSION['userID'];
$message = mysqli_real_escape_string($con,$_POST['message']);

//Check if session doesnt have max female/male limit
/*$sql1 = "SELECT * FROM bookings WHERE courseStart = '$courseStart' AND gender = '$gender'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1); */


//checking if user already has booking for particular date
/* $sql3 = "SELECT * FROM bookings WHERE userID = '$userID' AND courseStart = '$courseStart'";
$result3 = mysqli_query($con,$sql3);
$num_rows3 = mysqli_num_rows($result3); */

$sql= "INSERT INTO messages(userID, messageDate, message, responded) 
         VALUES ('$userID',now(),'$message','0')";

mysqli_query($con, $sql) or die(mysqli_error($con));
echo "Message inserted";
$_SESSION['message']="Your message was successfully sent! <p>";

    
header("Location:../serverBookings.php");	
	
?>
