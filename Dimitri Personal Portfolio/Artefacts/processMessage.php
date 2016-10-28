<?php
  include "../serverConnection.php";
if(isset($_SESSION['userID'] )){
    $userID = $_SESSION['userID'];
} else if(!(isset($_SESSION['userID']))){
 $userID = "";   
}

$fullName = mysqli_real_escape_string($con,$_POST['fullName']);
$message = mysqli_real_escape_string($con,$_POST['message']);


$sql= "INSERT INTO messages(userID, fullName, messageDate, message, responded) 
         VALUES ('$userID', '$fullName', now(),'$message','0')";

mysqli_query($con, $sql) or die(mysqli_error($con));
echo "Message inserted";
$_SESSION['message']="Your message was successfully sent! <p>";

if(isset($_SESSION['userID'] )){
    header("Location:../loggedin.php");
} else if(!(isset($_SESSION['userID']))){
    header("Location:../index.php");  
}  
//header("Location:../serverBookings.php");	
	
?>
