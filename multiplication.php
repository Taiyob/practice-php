<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication</title>
</head>
<body>
	<h2>Assignment Name: Multiplication Table of 2 to 5</h2>
	
		<div>
			<form action="" method="post">
				<input type="number" name="start"><br>
				 <input type="number" name="end"> 
				<input type="submit" name="submit" value="Result">
			</form>
		</div>

	
	<?php 
	if (isset($_POST['submit'])) {
		for ($i=$_POST['start']; $i <= $_POST['end'] ; $i++) { 
			echo "Multiplication Table of ". $i."<br>";
			for ($j=1; $j <= 10 ; $j++) { 
				echo $i ."X". $j."=". $i*$j."<br>";
				if ($j==10) {
					echo "<br>";
				}
			}
		}
	}
		
	 ?>
</body>
</html>