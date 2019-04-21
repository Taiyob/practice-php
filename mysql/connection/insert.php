<?php
	include('config.php');

	if(isset($_POST['submit'])){
		try{
			if(empty($_POST['name'])){
				throw new Exception('Name can not be empty!!!');
			}
			if(empty($_POST['roll'])){
				throw new Exception('Roll can not be empty!!!');
			}
			if(empty($_POST['age'])){
				throw new Exception('Age can not be empty!!!');
			}
			if(empty($_POST['email'])){
				throw new Exception('Email can not be empty!!!');
			}

			// global $conn;

			$stmt =  $conn->prepare("INSERT INTO tbl_st(st_name,st_roll,st_age,st_email) VALUES(:name,:roll,:age,:email)");

			$stmt->execute([
				'name' => $_POST[name],
				'roll' => $_POST[roll],
				'age' => $_POST[age],
				'email' => $_POST[email]
			]);
			// mysqli_query($conn,"insert into tbl_st(st_name,st_roll,st_age,st_email) values ('$_POST[name]','$_POST[roll]','$_POST[age]','$_POST[email]')");

			$success_message = "Data insert successfully ...... Thank you";
		}
		catch(Exception $e){
			$error_message = $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA INSERT PAGE</title>
</head>
<body>
	<h2>GIVE YOUR DATA</h2>

	<?php
		if(isset($error_message)){echo $error_message;}
		if(isset($success_message)){echo $success_message;}
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
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="send"></td>
			</tr>
		</table>
	</form>

	<a href="index.php">GO BACK</a>

	
	
</body>
</html>