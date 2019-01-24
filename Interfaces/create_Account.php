<?php
	include 'connect.php';

	if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password']))
	{
		$query = "SELECT * FROM dpn.account WHERE `EMAIL` = '" .$_GET['email']."';";
		$result = mysqli_query($con, $query);
		if($result == null)
		{

			$query = "INSERT INTO dpn.user (`NAME`) VALUES ('".$_GET['username']."');";
			$result = mysqli_query($con, $query);	

			$query = "INSERT INTO dpn.account (`user_ID`,`USERNAME`,`PASSWORD`,`EMAIL`) VALUES ('".mysqli_insert_id($con)."','".$_GET['username']."','".$_GET['password']."','".$_GET['email']."');";
			$result = mysqli_query($con, $query);
		}
		else 
		{
			echo "Email already exists";
		}

	}
	

?>