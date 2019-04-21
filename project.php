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
			text-align: center;
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
			<h2><?php echo "PROJECT ONE";?></h2>
		</section>
		<!-- Header End -->

		<!-- Content Start -->
		<section class="content">
			
		<?php
			echo "<p>Question: Take a number and print it reversely till 0.</p>";
			echo "<br>";

			$variable=20;
			while ($variable>=1) {
				echo "The number is counted reversly:   ". $variable. "<br>";
				$variable--;
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "<p>Question: Find even numbers between 1 to 20.</p>";
			echo "<br>";

			for ($i=0; $i <=20 ; $i++) { 
					if ($i%2==0) {
						echo "Even Number " . $i . "<br>";
					}else{
						echo "";
					}
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "<p>Question: Multiplication Table of 22 and 40.</p>";
			echo "<br>";

			for ($i=22; $i <=40 ; $i++) {
						echo "Multiplication of:  " . $i . "<br>"; 
					for ($j=1; $j <=10 ; $j++) { 
						echo $i . "x" . $j . "=" . $i*$j . "<br>";
					}
					echo "<br>";
				}

			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "<p>Question: Make a functions that sum  two numbers and print it.</p>";
			echo "<br>";

			function add($a,$b){
				$c = $a + $b;
				return "Result is: " . $a . "+" . $b . " = " . $c;
			}
			echo add(10,10);

			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "<p>Question: Make a functions that subtract two numbers and print it.</p>";
			echo "<br>";

			function cut($c,$d){
					$e = $c - $d;
					return "Result is: " . $c . "-" . $d . " = " . $e;
				}
			echo cut(100,10);
		?>
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
