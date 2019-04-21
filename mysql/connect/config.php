<?php
	$conn = mysqli_connect('localhost','root','')or die('can not connect');
	mysqli_select_db($conn,'coderhousebd')or die('please select database');
?>