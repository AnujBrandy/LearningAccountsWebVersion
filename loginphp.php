<?php
	session_start();
?>

<?php

include("dbConnection.php");

if( isset( $_POST['commit']))
{
	$user_email = $_POST['Email'];
	$user_password = $_POST['Password'];

	$check_user_presence = "select * from Users WHERE userEmail='$user_email' AND userPassword='$user_password'";
	$run_query = mysqli_query($dbConnection,$check_user_presence);

	if( !$run_query || mysqli_num_rows( $run_query ) == 0 )
	{
		echo "<script>alert('Email or Password is incorrect.')</script>";
		header("Location: signin.php");
		
	}
	else
	{
		echo "<script>window.open('profile.php','_self')</script>";
		
		$_SESSION['Email'] = $user_email;
	}

}