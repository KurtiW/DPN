<?php
	include 'connect.php';
	if(isset($_GET['topic']) && isset($_GET['rating']) && isset($_GET['range']))
	{
		$query = "SELECT * FROM dpn.user_profile_attributes WHERE `profile_attributes_ID` = '".$_GET['topic']."' AND `RATING` > '". ($_GET['rating'] - $_GET['range']) . "' AND `RATING` < '".($_GET['rating'] + $_GET['range'])."';";
		$result = mysqli_query($con, $query);

		while($row = mysqli_fetch_row($result))
		{
			echo $row[0] . "|" . $row[2]. "|" . $row[3] . "<br>";
		}
	}
	else if(isset($_GET['topic']) && isset($_GET['rating']))
	{
		$query = "SELECT * FROM dpn.user_profile_attributes WHERE `profile_attributes_ID` = '".$_GET['topic']."' AND `RATING` = '".$_GET['rating']."'";
		$result = mysqli_query($con, $query);

		while($row = mysqli_fetch_row($result))
		{
			echo $row[0] . "|" . $row[2]. "|" . $row[3] . "<br>";
		}
	}
?>