<?php
  include "../serverConnection.php";

$userID = mysqli_real_escape_string($con,$_POST['userID']);
$courseType = mysqli_real_escape_string($con,$_POST['courseType']);
$courseStart = mysqli_real_escape_string($con,$_POST['courseStart']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);

//$gender = $_SESSION['gender'];

//Check if session doesnt have max female/male limit
$sql1 = "SELECT * FROM bookings WHERE courseStart = '$courseStart' AND gender = '$gender'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1);

//checking if user already has booking
//$sql2 = "SELECT * FROM bookings WHERE userID = '$userID'";
//$result2 = mysqli_query($con,$sql2);
//$num_rows2 = mysqli_num_rows($result2);

//checking if user already has booking for particular date
$sql3 = "SELECT * FROM bookings WHERE userID = '$userID' AND courseStart = '$courseStart'";
$result3 = mysqli_query($con,$sql3);
$num_rows3 = mysqli_num_rows($result3);

$error="";
//Check if 26 males
if($num_rows1==26 || $num_rows3==1)
{
$_SESSION['message']="Maximum number males reached for this date reached or you have already booked this session.";
$error="error";
}

//Check if 26 females


if($error=="error")
{
    echo $_SESSION['message'];
    header("Location:../admin.php");
} else {
    echo "Data inserted";
   $sql= "INSERT INTO bookings(userID, date, courseType,courseStart, gender ) 
         VALUES ('$userID',now(),'$courseType','$courseStart','$gender')";
//$sql= "INSERT INTO users(fullname, email, ps4_user, x1_user, password, avatar) VALUES ('$fullname','$email','$ps4_user','$x1_user','$password','$avatar')";

mysqli_query($con, $sql) or die(mysqli_error($con));

$_SESSION['message']="Your booking was successfull!";	
header("Location:../admin.php");	
    
} // END else 
	


 
 
 
 




 

	

 ?>
