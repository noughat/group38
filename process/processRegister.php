  <?php
  include "../serverConnection.php";


  
$firstName = mysqli_real_escape_string($con,$_POST['firstName']);
$lastName = mysqli_real_escape_string($con,$_POST['lastName']);
$dateOfBirth = mysqli_real_escape_string($con,$_POST['dateOfBirth']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$homeAddress = mysqli_real_escape_string($con,$_POST['homeAddress']);
$avatar = mysqli_real_escape_string($con,$_POST['avatar']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$password = hash('sha256', $password);

//Check emails
$sql2 = "SELECT * FROM users WHERE email = '$email'";
$result2 = mysqli_query($con,$sql2);
$num_rows2 = mysqli_num_rows($result2);

$error="";
//CHECKING IF EMAIL ID EXISTS
if($num_rows2==1)
{
$_SESSION['message']="Email already in use.";
$error="error";
}

if($error=="error")
{
echo $_SESSION['message'];

    

header("Location:../index.php"); 
} else {
echo "AWESOME LETS WRITE TO DATABASE ";

   
//If email doesnt exist --> Create account
$sql= "INSERT INTO users(firstName, lastName, dateOfBirth, gender, mobile, homeAddress, email, password,avatar) 
                VALUES ('$firstName','$lastName','$dateOfBirth','$gender','$mobile','$homeAddress','$email','$password','$avatar')";


mysqli_query($con, $sql) or die(mysqli_error($con));

// ------------------------------------------------------
//Upload Avatar Image

if(isset($_FILES['avatar'])){
$img = $_FILES['avatar']['name'];
 
echo $img." ".$game." ".$description."  ";

$sql= "INSERT INTO users(avatar) VALUES ('$img')";
mysqli_query($con, $sql) or die(mysqli_error($con));

	
    $errors= array();
    $file_name = $_FILES['avatar']['name'];
    $file_size =$_FILES['avatar']['size'];
    $file_tmp =$_FILES['avatar']['tmp_name'];
    $file_type=$_FILES['avatar']['type'];   
    $file_ext=strtolower(end(explode('.',$_FILES['avatar']['name'])));
    $extensions = array("jpeg","jpg","png","gif"); 		
    if(in_array($file_ext,$extensions )=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 5097152){
    $errors[]='File size must be less than 5MB';
    }				
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../avatar/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    } 
    
    
    header("Location:../loggedin.php"); 

}




//-------------------------------------------------------



$_SESSION['userAdded']="Your account has successfully been created!";	
header("Location:../loggedin.php");	
	
} // END else statement

 
 
 
 




 

	

 ?>
