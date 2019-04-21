<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMAGE UPLOAD</title>
</head>
<body>
	<?php 
		if (isset($_FILES['image'])) {
			$file_name = $_FILES['image']['name'];
			$tmp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($tmp_name,"images/".$file_name);
			echo "Uploaded successfully";
		}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<input type="file" name="image">
			<input type="submit" name="submit">
		</table>
	</form>
</body>
</html>