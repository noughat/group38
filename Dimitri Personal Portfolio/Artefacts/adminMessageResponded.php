<?php
include "../serverConnection.php";

$messageResponded = $_GET['messageResponded'];
$messageID = $_GET['messageID'];

echo $messageResponded;
echo "<br>";
echo $messageID;

if($messageResponded == '1') {
    $sql="UPDATE messages SET responded = 0 WHERE messageID = $messageID";
    mysqli_query($con,$sql);
} else if($messageResponded == '0') {
    $sql="UPDATE messages SET responded = 1 WHERE messageID = $messageID";
    mysqli_query($con,$sql);
} 
 

header('location:../adminMessages.php');

?>