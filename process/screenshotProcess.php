<?php 
include "../serverConnection.php";

if(isset($_FILES['image'])){
	
$img = $_FILES['image']['name'];
$game= mysql_real_escape_string($_POST['gname']);
$description= mysql_real_escape_string($_POST['gdesc']);


  
echo $img." ".$game." ".$description."  ";

$sql= "INSERT INTO screenshots(image, game, description) VALUES ('$img','$game','$description')";
mysqli_query($con, $sql) or die(mysqli_error($con));

	
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];   
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $extensions = array("jpeg","jpg","png","gif"); 		
    if(in_array($file_ext,$extensions )=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 5097152){
    $errors[]='File size must be less than 5MB';
    }				
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../images/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }

header("Location:../loggedin.php"); 

}

 ?>