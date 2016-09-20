  <?php
  include "../serverConnection.php";

  
$ownedGames= mysql_real_escape_string($_POST['addGames']);
$userID=$_SESSION['userID'];

//Check if user already owns game:
$userGames = "SELECT * FROM usergames WHERE userID = '$_SESSION[userID]' AND gameID = $ownedGames";
$userGamesRestuls = mysqli_query($con,$sql4);
$num_rows5 = mysqli_num_rows($userGamesRestuls);
$error="";

//Check if PSN exists
if($num_rows5==1)
{
$_SESSION['usergames']="Oops, you already have this game in your library!";
$error="error";
}
if($error=="error")
{
//echo $_SESSION['message'];
//echo $_SESSION['psnerror'];
//echo $_SESSION['x1error'];

//header("Location:../index.php"); 
} else {
// $sql= "INSERT INTO userGames(userID, game_id) VALUES ('$ownedGames','$userID')";
$sql= "INSERT INTO `gamegearsocial`.`usergames` (`userID`, `game_id`) VALUES ('$userID', '$ownedGames');";
mysqli_query($con, $sql) or die(mysqli_error($con));

$_SESSION['userGamesAdded']="Game list updated successfully!";	 

echo $ownedGames."<br>";
echo $userID."<br>";

echo "<a href='../addgames.php'>Add Games</a>";
header('location:../addgames.php');



echo "AWESOME LETS WRITE TO DATABASE";
} // END INSERT STUFF TO DB



	
//$_SESSION['message']="User Added";	
//header("Location:index.php"); 

 ?>
