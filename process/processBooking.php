<?php
  include "../serverConnection.php";
$userID = $_SESSION['userID'];
$gender = $_SESSION['gender'];
$canBeServer = $_SESSION['canBeServer'];
$courseType = mysqli_real_escape_string($con,$_POST['courseType']);
$courseStart = mysqli_real_escape_string($con,$_POST['courseStart']);

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

//Check is user has made booking
if($num_rows3 == 1)
{
$_SESSION['message']="You have already booked this session.";
$error="error";
}

//Check if 26 males
if($num_rows1 > 26)
{
$_SESSION['message']="Maximum number $gender's reached for this date.";
$error="error";
}




//Check if user can be a server
if(($courseType == 3 || $courseType == 30)   && $canBeServer == 0)
{
$_SESSION['message']="The 10 day course must be completed first in order to book a 3 or 30 day course, or if you wish to be a server!";
$error="error";
}

//Check if 26 females
if($error=="error")
{
    echo $_SESSION['message'],"<p>";
    echo "Gender: ",$gender,"<p>";
    echo "Num bookings for date: ",$num_rows1,"<p>";
    header("Location:../bookings.php");
} else {
    
   $sql= "INSERT INTO bookings(userID, date, courseType,courseStart, gender ) 
         VALUES ('$userID',now(),'$courseType','$courseStart','$gender')";
           
   $sql1 = "UPDATE users SET canBeServer = 1 WHERE userID = $userID";
    
    
mysqli_query($con, $sql) or die(mysqli_error($con));
mysqli_query($con, $sql1) or die(mysqli_error($con));
echo "Data inserted<p>";
$_SESSION['message']="Your booking was successfull! <p>";
    echo "Current number of $gender's in class: ", $num_rows1,"<p>";
    echo "User ID: ",$num_rows3,"<p>";
    
header("Location:../bookings.php");	
    
} // END else 
	


 
 
 
 




 

	

 ?>
