<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php

		if (isset($_POST['massege'])) {
			$msg = $_POST['massege'];
			echo $msg;
		}
		
	?>

	<form action="in.php" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Roll</td>
				<td><input type="text" name="roll"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>