<?php
	include 'connect.php';

	$query = "INSERT INTO `user` (`NAME`) VALUES ('". $_GET['name']."');";

	$result = mysqli_query($con, $query);

echo mysqli_insert_id($con);



?>