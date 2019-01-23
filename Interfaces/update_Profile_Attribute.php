<?php
	include 'connect.php';

	if(isset($_GET['id']) && isset($_GET['topic']) && isset($_GET['description']))
	{
		$query = "UPDATE dpn.user_profile_attributes SET `DESCRIPTION` = '" . $_GET['description'] . "' WHERE `user_ID` = '".$_GET['id']."' AND `profile_attributes_ID` =  '".$_GET['topic']."';";
		echo $query;
		$result = mysqli_query($con, $query);
	}

	if(isset($_GET['id']) && isset($_GET['topic']) && isset($_GET['rating']))
	{
		$query = "UPDATE dpn.user_profile_attributes SET `RATING` = '" . $_GET['rating'] . "' WHERE `user_ID` = '".$_GET['id']."' AND `profile_attributes_ID` =  '".$_GET['topic']."';";
		echo $query;
		$result = mysqli_query($con, $query);
	}
?>