<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Page</title>
</head>
<body>
	<h2>Insert your Data</h2>

	<?php
		if(isset($error_message)){echo $error_message;}
		if(isset($success_message)){echo $success_message;}
	?>

	<?php
		include('config.php');
		if (isset($_POST['form1'])) {
			//$name = $_POST[''];
			//$roll = $_POST['roll'];
			//$age = $_POST['age'];
			//$email = $_POST['email'];

			try{
				if (empty($_POST['name'])) {
					throw new Exception("Error Processing Request");
				}
				if (empty($_POST['roll'])) {
					throw new Exception("Error Processing Request");
				}
				if (empty($_POST['age'])) {
					throw new Exception("Error Processing Request");
				}
				if (empty($_POST['email'])) {
					throw new Exception("Error Processing Request");
				}


				$result = mysqli_query($conn,"insert into tbl_st(st_name,st_roll,st_age,st_email) values ('$_POST[name]','$_POST[roll]','$_POST[age]','$_POST[email]')");

				$success_message = "Data Insert Succesfully";


			}
			catch (Exception $e){
				$error_message = $e->getMessage();
			}
		}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Roll</td>
				<td><input type="text" name="roll"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="form1" value="submit"></td>
			</tr>
		</table>
	</form>
	<a href="connect.php">GO BACK</a>
</body>
</html>