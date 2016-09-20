  <?php
  include "../serverConnection.php";


  
$ps4_user= mysql_real_escape_string($_POST['ps4_user']);
$x1_user= mysql_real_escape_string($_POST['x1_user']);


//Search emails
$sql2 = "SELECT * FROM users WHERE ps4_user = '$ps4_user' AND x1_user = '$x1_user'";
$result = mysqli_query($con,$sql2);
$num_rows = mysqli_num_rows($result);

//Check if email already exists
if($num_rows>=1)
{
	$_SESSION['message']="Your PSN and/or XBL username already exists";	
	header("Location:../index.php"); 

} else {

//If email doesnt exist --> Create account
$sql = "INSERT INTO users(ps4_user, x1_user) VALUES ('$ps4_user','$x1_user')";
mysqli_query($con, $sql) or die(mysqli_error($con));
header("Location:../loggedin.php");

$_SESSION['message']="User Added";	  
}
 ?>
