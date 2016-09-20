<?php
session_start();

//Connect to database

//FTP Server connect
//$con = mysqli_connect("mysql.2freehosting.com", "u428503560", "cross85246", "u428503560_medit"); 

//FTP Server connect
//$con = mysqli_connect("	server36.000webhost.com", "a3632939", "cross85246", "a3632939_mediDB");

//localhost
$con = mysqli_connect("localhost", "root", "", "meditation"); //Connect to database


if (mysqli_connect_errno($con)) //check for errors
	{
		echo "Unable to connect to the database: " . mysqli_connect_error();
		exit();
	}
?>