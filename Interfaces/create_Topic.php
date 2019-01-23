<?php

	include 'connect.php';

	if(isset($_GET['name']))
	{
		$query = "INSERT INTO dpn.profile_attributes (`NAME`) VALUES('".$_GET['name']."');";
		$result = mysqli_query($con, $query);

	}

?>