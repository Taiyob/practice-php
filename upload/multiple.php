<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New File Upload</title>
</head>
<body>
	<?php
		if (isset($_POST['submit'])) {
			$img = $_FILES['load']['name'];
			$tmp = $_FILES['load']['tmp_name'];
			move_uploaded_file($tmp, "images/".$img);
			echo "success";
		}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="load">
		<input type="submit" name="submit" value="send">
	</form>
</body>
</html>