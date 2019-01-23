<?php
	include 'connect.php';

	if(isset($_GET['id']) && isset($_GET['topic']))
	{
		$query = "INSERT INTO dpn.user_profile_attributes (`user_ID`,`profile_attributes_ID`) VALUES('".$_GET['id']."','".$_GET['topic']."');";
		$result = mysqli_query($con, $query);
	}
?>