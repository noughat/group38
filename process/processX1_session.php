
  <?php
  
include "../serverConnection.php";

$x1_user= mysql_real_escape_string($_POST['x1_user']);
$session_game= mysql_real_escape_string($_POST['session_game']); 
$session_notes= mysql_real_escape_string($_POST['session_notes']);
$session_userid=$_SESSION['userID'];

//Search X1 Sessions
$sql1 = "SELECT * FROM x1_sessions WHERE userID = '$session_userid'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1);

//Check if email already exists
if($num_rows1>=1)
{
	$_SESSION['sessionMessage']="You already have an active session!";	
	header("Location:loggedin.php"); 

} else {


$sql= "INSERT INTO x1_sessions(x1_user, session_game, session_notes,userID) VALUES ('$x1_user','$session_game','$session_notes','$session_userid')";


echo $sql;
mysqli_query($con, $sql) or die(mysqli_error($con));
	
//$_SESSION['message']="User Added";	

header("Location:loggedin.php"); 
}
?>

