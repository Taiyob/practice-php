<?php
	$txt = "";
	if(isset($_POST['submit'])){
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$user 		= $_POST['user'];
		$password 	= $_POST['password'];

		$valied = 1;
		
		if(empty($_POST['name'])){
			$valied = 0;
			$txt .= "Name is Require Field" . "<br>";
			
		}
		if(empty($_POST['email'])){
			$valied = 0;
			$txt .= "Email is Require Field" . "<br>";
			
		}
		if(empty($_POST['user'])){
			$valied = 0;
			$txt .= "User is Require Field" . "<br>";
			
		}
		if(empty($_POST['password'])){
			$valied = 0;
			$txt .= "Password is Require Field" . "<br>";
			
		}
		if(!preg_match("/^(Mr|Mrs|Dr|Md)\.\ /", $name)){
			$valied = 0;
			$txt .= "This is Invalied Name" . "<br>";
			
		}
		if(!(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))){
			$valied = 0;
			$txt .= "This is Invalied Email" . "<br>";
			
		}
		if(!(preg_match("/^[A-Za-z][A-Za-z0-9]{5,21}$/", $user ))){
			$valied = 0;
			$txt .= "This is Invalied user" . "<br>";
			
		}
		if($valied == 1){
		echo "You are Succeed";
		}else{
		echo "<span style='color:red;'>" . $txt . "</span>";
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>