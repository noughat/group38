<?php
include "../serverConnection.php";

$userID=$_SESSION['userID'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$dateOfBirth=$_POST['dateOfBirth'];
$mobile=$_POST['mobile'];
$homeAddress=$_POST['homeAddress'];
$email=$_POST['email'];
$gender=$_POST['gender'];


//$password=$_SESSION['password'];    password='$password' 
$sql="UPDATE users SET firstName='$firstName',lastName='$lastName',dateOfBirth='$dateOfBirth',mobile='$mobile', homeAddress='$homeAddress',email='$email',gender='$gender' where userID='$userID' ";
mysqli_query($con,$sql);


        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['dateOfBirth'] = $dateOfBirth;
        $_SESSION['gender'] = $gender;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['homeAddress'] = $homeAddress;
		$_SESSION['email'] = $email;



header('location:../profile.php');
$_SESSION['editPMessage']="Your deatils have successfully been updated!"; 

?>