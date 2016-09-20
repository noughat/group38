<?php
include "../serverConnection.php";

//Selecting PS4 and X1 Sessions
$selectPS4 = "DELETE FROM sessions WHERE session_username = '$_SESSION[ps4_user]' OR session_username = '$_SESSION[x1_user]'";
$PS4session = mysqli_query($con, $selectPS4) or die(mysqli_error($con));
	
$_SESSION['sessionDeleted']="You currently have no active session!";
header('Location:../gamecenter.php');

?>