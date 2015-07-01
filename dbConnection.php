<?php
	$dbConnection = mysqli_connect("localhost","root","");
	if($dbConnection)
	{
		echo "Connection";
	}
	mysqli_select_db($dbConnection,"AccountsDB");
?>