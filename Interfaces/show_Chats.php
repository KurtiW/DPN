<?php
	include 'connect.php';

	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.chats where `user_ID` = ".$_GET['id'].";";

	
		$result = mysqli_query($con, $query);

		$id;

		while($row = mysqli_fetch_row($result))
		{
			$id = $row[0];
			echo $row[0] . "|";
		}
	}

?>