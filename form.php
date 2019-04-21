		<?php
				
				$errname = $erremail = $errweb = $errgender = "";
				$username = $email = $web = $comments = $gender = "";


				if($_SERVER["REQUEST_METHOD"] == "POST"){
						if(empty($_POST["username"])){
							$errname = "<span style='color:red'>This field is required</span>";
						}else{
							$username 	= validation($_POST["username"]);
						}

						if(empty($_POST["email"])){
							$erremail = "<span style='color:red'>This field is required</span>";
						}elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
								$erremail = "<span style='color:red'>Invalaid Email</span>";
						}else{
							$email 		= validation($_POST["email"]);
						}

						if(empty($_POST["web"])){
							$errweb = "<span style='color:red'>This field is required</span>";
						}elseif(!filter_var($_POST["web"],FILTER_VALIDATE_URL)){
								$errweb = "<span style='color:red'>Invalaid site</span>";
						}else{
							$web 		= validation($_POST["web"]);
						}

						if(empty($_POST["gender"])){
							$errgender = "<span style='color:red'>This field is required</span>";
						}else{
							$gender 	= validation($_POST["gender"]);
						}	
						
						$comments 	= validation($_POST["comments"]);
						


						echo $username."<br>"; 
						echo $email."<br>"; 
						echo $web."<br>"; 
						echo $comments."<br>"; 
						echo $gender."<br>"; 
				}
				function validation($data){
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
	<title>PHP</title>
	<style>
		.header{
			background: #ddd;
			padding: 20px;
			text-align: center;
			margin: 0 auto;
			width: 72%;
		}
		.content{
			padding: 20px 0px;
			width: 75%;
			background: black;
			margin: 0 auto;
			color: #4267B2;
			/*text-align: center;*/
			font-size: 20px;
			font-weight: 700;
			font-style: italic;
		}
		.footer{
			background: #ddd;
			padding: 20px;
			text-align: center;
			margin: 0 auto;
			width: 72%;
		}
	</style>
</head>
<body>
	<div>
		<!-- Header Start -->
		<section class="header">
			<h2><?php echo "FORM VALIDATION";?></h2>
		</section>
		<!-- Header End -->

		<!-- Content Start -->
		<section class="content">	
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method= "post">
				<table>
					<tr>
						<td>NAME</td>
						<td><input type="text" name="username"><?php echo $errname;?></td>
					</tr>

					<tr>
						<td>E-mail</td>
						<td><input type="email" name="email"><?php echo $erremail;?></td>
					</tr>

					<tr>
						<td>WEBSITE</td>
						<td><input type="text" name="web"><?php echo $errweb;?></td>
					</tr>

					<tr>
						<td>COMMENTS</td>
						<td><textarea name="comments" id="" cols="30" rows="10"></textarea></td>
					</tr>

					<tr>
						<td>GENDER</td>
						<td>
							<input type="radio" name="gender" value="male">MALE
							<input type="radio" name="gender" value="female">FEMALE
							<?php echo $errgender;?>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>

			
		</section>
		<!-- Content End -->
	
		<!-- Footer Start -->
		<section class="footer">
			<p><?php echo "www.taiyobs side.com";?></p>
		</section>
		<!-- Footer End -->
	</div>
</body>
</html>
