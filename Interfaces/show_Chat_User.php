<?php
	include 'connect.php';

	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.chats where `ID` = ".$_GET['id'].";";

	}

	
	$result = mysqli_query($con, $query);



	while($row = mysqli_fetch_row($result))
	{
		
		echo $row[1] . "|" ."<br>";
	}

?>