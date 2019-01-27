<?php
	include 'connect.php';

	
		$query = "SELECT * FROM dpn.profile_attributes;";

	
		$result = mysqli_query($con, $query);


		while($row = mysqli_fetch_row($result))
		{
			echo $row[0] . "|" . $row[1]. "|";
		}
	

?>