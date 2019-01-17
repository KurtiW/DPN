<?php
	include 'connect.php';

	
			$query = "INSERT INTO dpn.user (`NAME`) VALUES ('".$_GET['username']."');";

				$result = mysqli_query($con, $query);	

		$query = "INSERT INTO dpn.account (`user_ID`,`USERNAME`,`PASSWORD`,`EMAIL`) VALUES ('".mysqli_insert_id($con)."','".$_GET['username']."','".$_GET['password']."','".$_GET['email']."');";

					echo $query;

	
	$result = mysqli_query($con, $query);


	

?>