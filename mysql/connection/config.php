<?php
 	// $conn = mysqli_connect('localhost','root','') or die('can not connect');
	// mysqli_select_db($conn,'coderhousebd') or die('please select database');

	$conn = new mysqli('localhost', 'root', '', 'coderhousebd');

	if ($conn->connect_error) {
		die('Error: '.$conn->connect_error);
	}
?>