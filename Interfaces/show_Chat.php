<?php
	include 'connect.php';
	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.messages where `chat_ID` = ".$_GET['id']." ORDER BY `TIME` ASC;";

		$result = mysqli_query($con, $query);

		while($row = mysqli_fetch_row($result))
		{
			echo $row[0] . "|" . $row[1]."|" . $row[2]."|" . $row[3] . "|" . $row[4] . ";";
		}
	}
?>