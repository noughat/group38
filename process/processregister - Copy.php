  <?php
  include "../serverConnection.php";

 
$fullname= mysqli_real_escape_string($_POST['fullname']);
$email= mysqli_real_escape_string($_POST['email']);
$ps4_user= mysqli_real_escape_string($_POST['ps4_user']);
$x1_user= mysqli_real_escape_string($_POST['x1_user']);
$password= mysqli_real_escape_string($_POST['password']);
$password = hash('sha256', $password);

//Check emails
$sql2 = "SELECT * FROM users WHERE email = '$email'";
$result2 = mysqli_query($con,$sql2);
$num_rows2 = mysqli_num_rows($result2);

//Check PSN
$sql3 = "SELECT * FROM users WHERE ps4_user = '$ps4_user'";
$result3 = mysqli_query($con,$sql3);
$num_rows3 = mysqli_num_rows($result3);

//Check PSN
$sql4 = "SELECT * FROM users WHERE ps4_user = '$ps4_user'";
$result4 = mysqli_query($con,$sql4);
$num_rows4 = mysqli_num_rows($result4);

$error="";
//CHECKING IF EMAIL ID EXISTS
if($num_rows2==1)
{
$_SESSION['message']="Email already in use.";
$error="error";
}
//Check if PSN exists
if($num_rows3==1)
{
$_SESSION['psnerror']="PSN already in use.";
$error="error";
}
//Check if XBL exists
if($num_rows4==1)
{
$_SESSION['x1error']="XBL already in use.";
$error="error";
}
if($error=="error")
{
//echo $_SESSION['message'];
//echo $_SESSION['psnerror'];
//echo $_SESSION['x1error'];

//header("Location:../index.php"); 
} else {
echo "AWESOME LETS WRITE TO DATABASE";
//If email, PSN or XBL doesnt exist --> Create account
$sql= "INSERT INTO users(fullname, email, ps4_user, x1_user, password) VALUES ('$fullname','$email','$ps4_user','$x1_user','$password')";
mysqli_query($con, $sql) or die(mysqli_error($con));
header("Location:../index.php");	
	
}

 
 
 
 




$_SESSION['userAdded']="Your account has successfully been created!";	 

	

 ?>
