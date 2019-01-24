<?php
	include 'connect.php';
	if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password']))
	{
		$query = "SELECT * FROM dpn.account WHERE `EMAIL` = '" .$_GET['email']."';";
		
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0)
		{
			echo "Email already exists";	
		}
		else 
		{
			$query = "INSERT INTO dpn.user (`NAME`) VALUES ('".$_GET['username']."');";
			$result = mysqli_query($con, $query);	


			$id=mysqli_insert_id($con);
			$query = "INSERT INTO dpn.account (`user_ID`,`USERNAME`,`PASSWORD`,`EMAIL`) VALUES ('".$id."','".$_GET['username']."','".$_GET['password']."','".$_GET['email']."');";
			$result = mysqli_query($con, $query);

			echo $id;	

		}
	}
?>