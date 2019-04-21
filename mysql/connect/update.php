<?php
	include ('config.php');

	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];
	}else{
		header ('location:view.php');
	}

	if (isset($_REQUEST['form1'])) {
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


				$result = mysqli_query($conn,"update tbl_st set st_name='$_POST[name]',st_name='$_POST[roll]',st_name='$_POST[age]',st_name='$_POST[email]' where st_id='$id'");

				$success_message = "Data Update Succesfully";


			}
			catch (Exception $e){
				$error_message = $e->getMessage();
			}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Page</title>
</head>
<body>
	<h2>Update your date</h2>

	<?php
		//if(isset($error_message)){echo $error_message;}
		//if(isset($success_message)){echo $success_message;}
	?>

	<?php
		$save = mysqli_query($conn, "select * from tbl_st where st_id='$id';");
		global $row;
		while (mysqli_fetch_array($save)) {
			global $old_name;
			$old_name = $row['st_name'];
			global $old_roll;
			$old_roll = $row['st_roll'];
			global $old_age;
			$old_age = $row['st_age'];
			global $old_email;
			$old_email = $row['st_email'];
		}
	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php global $old_name; echo $old_name;?>"></td>
			</tr>
			<tr>
				<td>Roll</td>
				<td><input type="text" name="roll" value="<?php global $old_roll; echo $old_roll;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php global $old_age; echo $old_age;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php global $old_email; echo $old_email;?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="form1" value="update"></td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?php echo $id;?>">
	</form>

	<a href="view.php">GO BACK</a>
</body>
</html>