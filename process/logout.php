

<?php
session_start();
session_destroy();
header('Location:../index.php');

?>
<!--
CODE WAS FOR DELETING ANY ACTIVE SESSION:

include "serverConnection.php";  
/*if (!(isset($_SESSION['login']))){

header ("Location:index.php");

} */

if(isset($_SESSION['iAmLogged'] )) {
	
} //


echo "PSN: ". $_SESSION['ps4_user']; 






if (isset($_POST['createPS4session']))
 { 
$ps4_user= mysql_real_escape_string($_POST['ps4_user']);
$session_game= mysql_real_escape_string($_POST['session_game']); 
$session_notes= mysql_real_escape_string($_POST['session_notes']);
$session_userid=$_SESSION['userID'];



$sql= "DELETRE FROM ps4_sessions(ps4_user, session_game, session_notes,userID) 
		VALUES ('$ps4_user','$session_game','$session_notes','$session_userid') 
	 ";	/*WHERE (userID=$_SESSION['userID'])*/ 


mysqli_query($con, $sql) or die(mysqli_error($con));
	
	

//header("Location:loggedin.php"); 
}

session_destroy();
//header('Location: index.php');
?>


-->
