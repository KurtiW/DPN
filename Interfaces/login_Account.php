<?php
	include 'connect.php';

	if(isset($_GET['username']) && $_GET['password']))
	{
		$query = "SELECT * FROM dpn.account WHERE `USERNAME` = " . $_GET['username'] . " AND `PASSWORD` = " . $_GET['password'] . ";";

	}



	
	$result = mysqli_query($con, $query);



	while($row = mysqli_fetch_row($result))
	{
		
		echo $row[0];
	}

?>