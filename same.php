<form action="same.php" method="post">
	<input type="submit" name="submit">
		submit
	</input>
	
</form>

<?php
if(isset( $_POST['submit']))
{
	echo "hello world";

	$dbConnection = mysqli_connect("localhost","root","");
	mysqli_select_db($dbConnection,"Users");
	$user_name="anuj";
	$user_email="anuj";
	$user_password="anuj";
	$insert_new_user = "insert into Users (id,userName, userEmail, userPassword) VALUE (2,'anuj','anuj','anuj')";
	echo "hello world";
	if( mysqli_query( $dbConnection, $insert_new_user ) )
        {
          echo "<script>window.open('profile.php','_self')</script>";
        }
}
	
?>