
<?php
		$errname = $erruser = $errmail = $errurl  = $errgender = $comments = "";
		$full_name = $user_name  = $email = $url  = $gender = "";
		if($_SERVER["REQUEST_METHOD"]	==	"POST") {
			if (empty($_POST["f_name"])) {
				 $errname = "<div class='custom'>Required Field</div>";
			}else{
				echo $full_name 		= validate($_POST["f_name"]);
				echo "<br>";
			}

			if (empty($_POST["U_name"])) {
				 $erruser = "<div class='custom'>Required Field</div>";
			}else{
				echo $user_name 		= validate($_POST["U_name"]);
				echo "<br>";
			}

			if (empty($_POST["email"])) {
				 $errmail = "<div class='custom'>Required Field</div>";
			}elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
				$errmail = "<div class='custom'>Invalied Email</div>";
			} else{
				echo $email 			= validate($_POST["email"]);
				echo "<br>";
			}

			if (empty($_POST["url"])) {
				 $errurl = "<div class='custom'>Required Field</div>";
			}elseif (!filter_var($_POST["url"],FILTER_VALIDATE_URL)) {
				$errurl = "<div class='custom'>Invalied Url</div>";
			} else{
				echo $url 			= validate($_POST["url"]);
				echo "<br>";
			}

			if (empty($_POST["gender"])) {
				 $errgender = "<div class='custom'>Required Field</div>";
			}else{
				echo $gender 		= validate($_POST["gender"]);
				echo "<br>";
			}






			/*
			//$full_name 		= validate($_POST["f_name"]);
			//$user_name 		= validate($_POST["U_name"]);
			//$email 			= validate($_POST["email"]);
			//$url 			= validate($_POST["url"]);
			//$comments 		= validate($_POST["comments"]);
			//$gender 		= validate($_POST["gender"]);

			echo $full_name . "<br>";
			echo $user_name  . "<br>";
			echo $email  . "<br>";
			echo $url . "<br>";
			echo $comments . "<br>";
			echo $gender . "<br>";
			*/
			
		}

		function validate($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>forms</title>
	<style>
		.custom{
			color:red;
			font-size: 16px;
		}
	</style>
</head>
<body>
	
	<form action="" method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="f_name"><?php echo $errname;?></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="U_name"><?php echo $erruser;?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"><?php echo $errmail;?></td>
			</tr>
			<tr>
				<td>Url</td>
				<td><input type="text" name="url"><?php echo $errurl;?></td>
			</tr>
			<tr>
				<td>Comments</td>
				<td><textarea name="comments" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<?php echo $errgender;?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php
/*


$full_name 		= $data($_POST["f_name"]);
			$user_name 		= $data($_POST["U_name"]);
			$email 			= $data($_POST["email"]);
			$url 			= $data($_POST["url"]);
			$comments 		= $data($_POST["comments"]);
			$gender 		= $data($_POST["gender"]);

			echo $full_name . "<br>";
			echo $user_name  . "<br>";
			echo $email  . "<br>";
			echo $url . "<br>";
			echo $comments . "<br>";
			echo $gender . "<br>";

			//var_dump($_SERVER["REQUEST_METHOD"]=="POST");
		}

		function validate($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;









*/


?>