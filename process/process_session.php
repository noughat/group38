
  <?php
  
include "../serverConnection.php";

$session_game= mysqli_real_escape_string($con, $_POST['session_game']); 
$session_username= mysqli_real_escape_string($con, $_POST['session_username']); 
$session_platform= mysqli_real_escape_string($con, $_POST['session_platform']); 
$session_mic= mysqli_real_escape_string($con, $_POST['session_mic']); 
$session_notes= mysqli_real_escape_string($con, $_POST['session_notes']);
$session_userid=$_SESSION['userID'];
echo $session_username;


//Search Sessions
$sql1 = "SELECT * FROM sessions WHERE userID = '$session_userid'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1);

//Check if user has active session
if($num_rows1>=1)
{
	$_SESSION['sessionMessage']="You already have an active session!";	
	header("Location:../gamecenter.php"); 

} else {


$sql= "INSERT INTO sessions(session_game, session_username, session_platform, session_mic, session_notes,userID) VALUES ('$session_game','$session_username','$session_platform','$session_mic','$session_notes','$session_userid')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$_SESSION['sessionCreated']="Session Created";	


$_SESSION['deleteSession']="<a href=deleteSession.php> Delete Session! </a>";
header("Location:../gamecenter.php"); 
}
?>

