
  <?php
  
include "../serverConnection.php";

$post_author = $_SESSION['fullname'];
$post_body= mysql_real_escape_string($_POST['post_body']); 
$post_type = 'r';
$thread_id=mysql_real_escape_string($_POST['thread_id']); 
$timestamp = date('Y-m-d G:i:s');
$session_userid=$_SESSION['userID'];

echo "Author: ".$post_author."<br>";
echo "Body: ".$post_body."<br>";
echo "Type: ".$post_type."<br>";
echo "Thread ID: ".$thread_id."<br>";
echo "TimeStamp: ".$timestamp."<br>";

$sql= "INSERT INTO forum_post(post_author, post_body, post_type, thread_id, post_timestamp) VALUES ('$post_author','$post_body','$post_type','thread_id','$timestamp')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$_SESSION['replyCreated']="Reply Created";	
header("Location:../forum-1.php"); 

?>

