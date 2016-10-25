<?php
  include "../serverConnection.php";
$userID = $_SESSION['userID'];
$gender = $_SESSION['gender'];
$courseType = mysqli_real_escape_string($con,$_POST['courseType']);
$serverStart = mysqli_real_escape_string($con,$_POST['serverStart']);

//Check if session doesnt have max female/male limit
$sql1 = "SELECT * FROM serverBookings WHERE serverStart = '$serverStart' AND gender = '$gender'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1);



//checking if user already has booking
//$sql2 = "SELECT * FROM bookings WHERE userID = '$userID'";
//$result2 = mysqli_query($con,$sql2);
//$num_rows2 = mysqli_num_rows($result2);


//checking if user already has booking for particular date
$sql3 = "SELECT * FROM serverBookings WHERE userID = '$userID' AND serverStart = '$serverStart'";
$result3 = mysqli_query($con,$sql3);
$num_rows3 = mysqli_num_rows($result3);

/*
$error="";
//Check if 26 males
if($num_rows1>26 || $num_rows3==1)
{
$_SESSION['message']="Maximum number $gender's reached for this date reached or you have already booked this session.";
$error="error";
}

//Check if 26 females
if($error=="error")
{
    echo $_SESSION['message'],"<p>";
    echo "Gender: ",$gender,"<p>";
    echo "Num bookings for date: ",$num_rows1,"<p>";
    header("Location:../serverBookings.php");
} */

if($_SESSION['canBeServer'] == 0) {
  $_SESSION['message'] = "You require to complete a 10 day course in order to volunteer!";
    echo $_SESION['message'];
    header("Location:../serverBookings.php");
} else if($_SESSION['canBeServer'] == 1) {
    
   $sql= "INSERT INTO serverBookings(userID, date, courseType,serverStart, gender ) 
         VALUES ('$userID',now(),'$courseType','$serverStart','$gender')";


mysqli_query($con, $sql) or die(mysqli_error($con));
echo "Data inserted";
$_SESSION['message']="Your booking was successfull! <p>";
    echo "Current number of $gender's in class: ", $num_rows1,"<p>";
    echo "User ID: ",$num_rows3,"<p>";
    
header("Location:../serverBookings.php");	
    
} // END else 
	


 
 
 
 




 

	

 ?>
