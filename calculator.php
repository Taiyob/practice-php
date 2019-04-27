<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<body>
	<?php

		

		$sum1 = $_POST['a'];
		$sum2 = $_POST['b'];


		function add($a,$b){
			echo "Addition ".$a+$b;
		}
		function sub($a,$b){
			echo "Substraction ".$a-$b;
		}
		function mul($a,$b){
			echo "Multiplication ".$a*$b;
		}
		function div($a,$b){
			echo "Division ".$a/$b;
		}

		if (isset($_POST['add'])) {
			add ($sum1,$sum2);
		}
		if (isset($_POST['sub'])) {
			sub ($sum1,$sum2);
		}
		if (isset($_POST['mul'])) {
			mul ($sum1,$sum2);
		}
		if (isset($_POST['div'])) {
			div ($sum1,$sum2);
		}
	?>
	<form action="" method="post">
		<table>
			Number_One<input type="number" name="num1"><br/>
			Number_Two<input type="number" name="num2"><br/>
			<input type="submit" name ="add" value="+">
			<input type="submit" name ="sub" value="-">
			<input type="submit" name ="mul" value="X">
			<input type="submit" name ="div" value="/">
		</table>
	</form>
</body>
</html>