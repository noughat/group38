
  <?php
  
include "../serverConnection.php";

$post_title= mysql_real_escape_string($_POST['post_title']);
$post_author = $_SESSION['fullname'];
$post_body= mysql_real_escape_string($_POST['post_body']); 
$post_type = 'o';
$forum_id = '1';
$timestamp = date('Y-m-d G:i:s');
$session_userid=$_SESSION['userID'];

//Search PS4 Sessions
 /*$sql1 = "SELECT * FROM ps4_sessions WHERE userID = '$session_userid'";
$result1 = mysqli_query($con,$sql1);
$num_rows1 = mysqli_num_rows($result1);*/

$sql= "INSERT INTO forum_post(post_title, post_author, post_body, post_type, forum_id, post_timestamp) VALUES ('$post_title','$post_author','$post_body','$post_type','$forum_id','$timestamp')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$_SESSION['sessionCreated']="Session Created";	
$_SESSION['sessionDeleted']="<a href=deleteSession.php> Delete Session! </a>";
header("Location:../forum-1.php"); 

?>

