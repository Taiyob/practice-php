<?php
	/*
	if (!empty($_POST['user']) && !empty($_POST['roll'])) {
		$name = $_POST['user'];
		$roll = $_POST['roll'];
		echo $name . "<br>";
		echo $roll . "<br>";
	}else{
		echo "NOT FOUND";
	}
	*/


	if (isset($_POST['user']) && isset($_POST['roll'])) {
		$name = $_POST['user'];
		$roll = $_POST['roll'];
		echo $name . "<br>";
		echo $roll . "<br>";

		header('location: st.php?massege=success');


	}else{
		echo "NOT FOUND";

		header('location: st.php?massege=error');


	}
	


	

?>