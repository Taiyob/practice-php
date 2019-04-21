<?php
	include ('config.php');

	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];

		$save = mysqli_query($conn , "delete from tbl_st where st_id='$id'");

		header ('location:view.php');
	}else{
		header ('location:view.php');
	}

	
?>

