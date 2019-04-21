<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documentary</title>
</head>
<body>
	<?php
		setcookie("visitor","",time()-3600);
		session_start();
		$tarik = date("d/m/Y");
		echo "Today's Date is: " . $tarik . "<br>";
		echo "Today is: ". date("l") . "<br>";
		echo "Time is now(php): " . date("h:i:sa") . "<br>";
		date_default_timezone_set('asia/dhaka');
		echo "Time is now(Dhaka): " . date("h:i:sa") . "<br>";
		echo date_default_timezone_get() . "<br>";
	?>
	<?php
		//include('st.php');
	?>
	<?php
		echo readfile("text.txt");
	?>
	<br/>
	<?php
		$my_file = fopen("text.txt", "r") or die("File not found");
		echo fread($my_file , filesize("text.txt"));
		fclose($my_file);
	?>
	<br>
	<?php
		$my_file = fopen("text.txt", "r") or die("File not found");
		echo fgets($my_file , filesize("text.txt"));
		fclose($my_file);
	?>
	<br/>
	<?php
		$my_file = fopen("text.txt", "r") or die("File not found");
		echo fgetc($my_file);
		fclose($my_file);
	?>
	<br/>
	<?php
		$my_file = fopen("text.txt", "r") or die("File not found");
		while (!feof($my_file)) {
		 	echo fgets($my_file). "<br>";
		 } 
		fclose($my_file);
	?>
	<br/>
	<?php
		$my_file = fopen("text.txt", "r") or die("File not found");
		while (!feof($my_file)) {
		 	echo fgetc($my_file). "<br>";
		 } 
		fclose($my_file);
	?>
	<br/>
	<?php
		$creat_file = fopen("write.txt", "w") or die("File not found");
		$num_one = "PLease Try Hard to your Success.";
		echo "<br>";
		fwrite($creat_file, $num_one);

		$num_one = "PLease Try Hard to your Success.";
		fwrite($creat_file, $num_one);

		fclose($creat_file);
	?>
	<br/>
	<?php
		$_SESSION['user'] = " OLI";
		$_SESSION['password'] = "123456";

		echo "User Name is " . $_SESSION['user'] . "<br>";
		echo "Password is " . $_SESSION['password'] . "<br>";
		session_destroy();
	?>
	<br/>
	<?php
	//if (isset($_COOKIE['visitor'])) {
		//setcookie("visitor","1",time()+86400,"/") or die("not set");
		//echo "This is your first time";
	//}elseif(){
		//echo "You are porano mall";
	//}else{
		echo "delete";
	//}
		
	?>
	<br/>
	<?php
		$int = 90;
		$min = 10;
		$max = 200;

		if(filter_var($int , FILTER_VALIDATE_INT , array(
			"options"=>array(
				"min_range"=>$min,
				"max_range"=>$max
			)))){
			echo "Interger";
		}else{
			echo "Not Integer";
		}
	?>
	<br/>
	<?php
		function numcheck($num){
			if ($num>1) {
				throw new Exception("Number is greter then 1");
			}
			return true;
		}
		try{
				numcheck(0);
				echo "Number is less then 1";
			}
		catch(Exception $e){
				echo "Massage" . $e->getmessage();
			}
	?>
	


<?php
/*
date_default_timezone_set('asia/Dhaka');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}

echo "<br>";

$var1 = "Hello";
$var2 = "hello";
echo strcmp($var1, $var2);
*/
?>



</body>
</html>