<?php 
 include "../serverConnection.php";

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
	$password = hash('sha256', $password);

	$sql = "SELECT *
			FROM users
			WHERE email = '{$email}'
			AND password = '{$password}'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1)
    {
		$_SESSION['userID'] = $row['userID'];
		$_SESSION['login'] = $row['email'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
		$_SESSION['email'] = $row['email'];
        $_SESSION['dateOfBirth'] = $row['dateOfBirth'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['homeAddress'] = $row['homeAddress'];
        $_SESSION['email'] = $row['email'];
		$_SESSION['avatar'] = $row['avatar'];
        $_SESSION['admin'] = $row['admin_privileges'];
        $_SESSION['canBeServer'] = $row['canBeServer'];;
		$_SESSION['iAmLogged'] = "iAmLogged";
        
        echo $_SESSION['userID'];

		header('Location:../loggedin.php');
        
    } else {	
	session_destroy();
    header('Location:../login.php');
 	}

?>

