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
			padding: 200px 0px;
			width: 75%;
			background: black;
			margin: 0 auto;
			color: white;
			text-align: center;
			
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
		<section class="header">
			<h2><?php echo "THIS IS PHP SYNTEXT";?></h2>
		</section>
















		<section class="content">
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
				USERNAME:<input type="text" name="username">
				<input type="submit" name="click">
			</form>

			<br/>
			<br/>
			<br/>
			<br/>

		<?php
			$v="This is the learning moment to be a Programmer.";
			echo $v;
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo strlen($v);
			echo "<br>";
			echo "<br>";
			echo str_word_count($v);
			echo "<br>";
			echo strrev($v);
			echo "<br>";
			echo "<br>";
			echo strpos($v, "Programmer");
			echo "<br>";
			echo "<br>";
			echo str_replace("learning", "teaching", $v);
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";

			// define function start

			define("php", "WEB DEVELOPER",true);

			function plug(){
				return PHP;
			}
			echo plug();
			//	End

			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";


			$j=30;
			$d=30;
			var_dump($j=$d);

			echo "<br>";
			echo "<br>";
			echo "<br>";

			var_dump($j==$d);


			echo "<br>";
			echo "<br>";
			echo "<br>";


			var_dump($j===$d);


			echo "<br>";
			echo "<br>";
			echo "<br>";

			$i=29;
			$s="76";
			var_dump($i===$s);
			var_dump($i=$s);


			echo "<br>";
			echo "<br>";
			echo "<br>";

			var_dump($i==$s);


			echo "<br>";
			echo "<br>";
			echo "<br>";

			var_dump($i===$s);

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$nor=10;
			$kor=5;

			var_dump($nor !== $kor);

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$site1 = array(
				"a"=>"keeper",
				"b"=>"defence"
			);
			$site2 = array(
				"c"=>"keeper",
				"d"=>"defence"
			);	
			var_dump($site1 == $site2);


			echo "<br>";
			echo "<br>";
			echo "<br>";



			$u=10;
			if ($u>15) {
				echo "U is grethwe then ten";
			}elseif ($u>12) {
				echo "U is grethwe then twelve";
			}else{
				echo "please given right value";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$taiyob = "programmer";

			switch($taiyob){

				case "html":
				echo "you are designer";
				break;

				case "css":
				echo "you are designer";
				break;

				case "bootstrape":
				echo "you are good designer";
				break;

				case "jquery":
				echo "you are better designer";
				break;

				case "php":
				echo "you are developer";
				break;

				case "programmer":
				echo "you are the boss of coding side";
				break;

				default:
				echo "wrong imagination about taiyob";
			}



			echo "<br>";
			echo "<br>";
			echo "<br>";

			$variable=1;
			while ($variable<=10) {
				echo "The number is $variable <br>";
				$variable++;
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";

			$condition=100;
			do{
				echo "The number is $condition <br>";
				$condition--;
			}while($condition>=1);


			echo "<br>";
			echo "<br>";
			echo "<br>";


			for ($i=0; $i <= 20; $i++) { 
				echo "The number is $i <br>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";


			for ($i=2; $i <= 20; $i=$i*2) { 
				echo "2 X $i = $i <br>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";

			$some=array('red','green','blue');
			foreach ($some as $colors) {
				echo "$colors <br>";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";
			

			function funsum($a, $b){
			return $a+$b;
			}
			echo "10+5=".funsum (10, 5);


			echo "<br>";
			echo "<br>";
			echo "<br>";

			function school(){
				return "Adamjee Cantonment School";
			}

			echo school();


			echo "<br>";
			echo "<br>";
			echo "<br>";

			function student($name="Taiyob",$place="Dhaka"){
				return "$name lives in $place <br/>";
			}

			echo student("Alamin","Manikgong");
			echo student("Alamin","Tangail");
			echo student("Redon","Gazipur");
			echo student("Jisan","Noakhali");
			echo student("Rakib","Lokkhipor");
			echo student();

			echo "<br>";
			echo "<br>";
			echo "<br>";

			function math($x,$t){
				return $p=$x+$t;
			}

			echo "39" ."+". "40". "=". math(39,40);



			echo "<br>";
			echo "<br>";
			echo "<br>";


			$people = array("Sadaf","Didar","Safkat","Sadman","Tonmoy");

			$spin = count($people);
			//echo $spin;

			for ($i=0; $i<$spin ; $i++) { 
				echo "He is ". $people[$i]. "<br/>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";


			$schools = array("acps"=>"1960","uk"=>"1990","spcs"=>"2006","bn"=>"1998","srs"=>"1975");

			foreach ($schools as $name => $year) {
				echo $name . " build in " . $year . "<br/>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";

			$cars = array(
				array("toyota",55,90),
				array("volvo",60,93),
				array("bmw",75,98),
				array("sunny",45,80)
			);

			for ($col=0; $col<4 ; $col++) { 
				echo "Details";
				echo 	"<ul>";
							for ($row=0; $row<3 ; $row++) { 
								echo "<li>";
									echo $cars[$col][$row];
								echo "</li>";
							}
				echo	"</ul>";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";

			//problem
			for ($multiplication=0; $multiplication<4 ; $multiplication++) { 
				echo "Namota";


				echo "<ul>";
					for ($class=0; $class <10 ; $class++) { 
						echo "<li>";
							echo $multiplication*$class ;
						echo "</li>";
					}
				echo "</ul>";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$boyz = array("Shohan","Taiyob","Lisan","Rakib");
			$length = count($boyz);
			sort($boyz);

			for ($i=0; $i < $length ; $i++) { 
				echo $boyz[$i]."<br/>";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$boyz = array("Shohan","Taiyob","Lisan","Rakib");
			$length = count($boyz);
			rsort($boyz);

			for ($i=0; $i < $length ; $i++) { 
				echo $boyz[$i]."<br/>";
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$boyz = array("45","4","56","54");
			$length = count($boyz);
			sort($boyz);

			for ($i=0; $i < $length ; $i++) { 
				echo $boyz[$i]."<br/>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";


			$boyz = array("45","4","56","54");
			$length = count($boyz);
			rsort($boyz);

			for ($i=0; $i < $length ; $i++) { 
				echo $boyz[$i]."<br/>";
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";


			$ages = array("Shohan"=>"14","Rakib"=>"20","Lisan"=>"13","Taiyob"=>"25");

			asort($ages);

			foreach ($ages as $age => $value) {
				echo $age . $value . "<br>";			
			}


			echo "<br>";
			echo "<br>";
			echo "<br>";


			$ages = array("Shohan"=>"14","Rakib"=>"20","Lisan"=>"13","Taiyob"=>"25");

			ksort($ages);

			foreach ($ages as $age => $value) {
				echo $age . $value . "<br>";			
			}

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$link = 20;

			function test1(){
				global $link;
				$com1 = 10;
				echo $com1 . "<br/>";
				echo $link . "<br/>";
			}
			function test2(){
				global $link;
				$com2 = 15;
				echo $com2 . "<br/>";
				echo $link . "<br>";
			}

			test1();
			test2();

			echo "<br>";
			echo "<br>";
			echo "<br>";


			$var1 = 100;
			$var2 = 200;

			function sum (){
				echo $GLOBALS['var2'];
			}
			 sum();
			//echo "string";


			 /*

				$_SERVER['PHP_SELF']
				$_SERVER['SERVER_NAME']
				$_SERVER['SCRIPT_NAME']
				$_SERVER['HTTP_USER-AGENT']
				$_SERVER['SERVER_ADDR']



			 */
				echo "<br>";
				echo "<br>";
				echo "<br>";

				echo $_SERVER['PHP_SELF'] . "<br/>";
				echo $_SERVER['SERVER_NAME'] . "<br/>";
				echo $_SERVER['SCRIPT_NAME'] . "<br/>";
				echo $_SERVER['HTTP_USER_AGENT'] . "<br/>";
				echo $_SERVER['SERVER_ADDR'] . "<br/>";


				echo "<br>";
				echo "<br>";
				echo "<br>";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST['username'];
					if (empty($name)) {
						echo "<span style='color:red'>Invalaid Field</span>";
					}else{
						echo "<span style='color:green'>Successfull . $name</span>";
					}
				}

				//echo "<a href="test.php?msg=GOOD&txt=Bye">Go to herself</a>";

				
				echo "<br>";
				echo "<br>";
				echo "<br>";

			

				$aa = 15;
				if ($aa>10) {
					echo "\$aa is big";
				}elseif ($aa==10) {
					echo "\$aa is not big";
				}else{
					echo "\$aa is small";
				}


				echo "<br>";
				echo "<br>";
				echo "<br>";


				$bb = 20;
				$cc = 35;

				if (($bb>18)&&($cc<20)) {
					echo "And is working";
				}elseif (($bb==20)||($cc>20)) {
					echo "Or is working";
				}else{
					echo "Do not working anyone";
				}

				echo "<br>";
				echo "<br>";
				echo "<br>";


				$number_one=400;
				$number_two=740;
				$number_three=740;

				if ($number_one>$number_two) {
					if ($number_one>$number_three) {
						echo "Number One is Highest";
					}else{
						echo "Number Three is Highest";
					}	
				}elseif($number_two>$number_three){
					echo "Number Two is Highest";
				}else{
					echo "Number Three is Highest";
				}

				echo "<br>";
				echo "<br>";
				echo "<br>";

				$grade = 600;

				if (($grade<=100)&&($grade>=90)){
					echo "You Got Golden A+";
				}elseif (($grade<90)&&($grade>=80)) {
					echo "You Got A+";
				}elseif (($grade<80)&&($grade>=70)) {
					echo "You Got A-";
				}elseif (($grade<70)&&($grade>=60)) {
					echo "You Got B";
				}elseif (($grade<60)&&($grade>=50)) {
					echo "You Got C";
				}elseif (($grade<50)&&($grade>=33)) {
					echo "You Got D";
				}elseif (($grade>100)||($grade<0)) {
					echo "Matha Gese";
				}else{
					echo "Abar Porikhha Dis";
				}


				echo "<br>";
				echo "<br>";
				echo "<br>";

				for ($i=0; $i <=10 ; $i++) { 
					if ($i==10) {
						echo $i . ". ";
					}else{
						echo $i . ", ";
					}
					
				}

				echo "<br>";
				echo "<br>";
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


				// 1+2+3+4+........+100
				$sum=0;
				for ($i=1; $i<=100 ; $i++) { 
					$sum=$sum+$i;
					echo $sum . " ";
				}
				echo "<br>";
				echo $sum . " ";


				echo "<br>";
				echo "<br>";
				echo "<br>";

				// 1+3+5+7+9+11+13+15+.......+99
				$sum=0;
				for ($i=1; $i <=100 ; $i++) { 
					if ($i%2==0) {
						continue;
					}elseif($i%2!=0){
						$sum=$sum+$i;
					}
				}
				echo $sum;

				echo "<br>";
				echo "<br>";
				echo "<br>";


				// 1+2+3+4+........total 100 number

				$sum=0;
				$count=0;
				for ($i=1; ; $i++) { 
					$count++;
					$sum=$sum+$i;
					if ($count==100) {
						break;
					}
				}
				echo $sum;

				echo "<br>";
				echo "<br>";
				echo "<br>";

				// 1+3+5+7+9+11+13+15+.......total sum
				$sum=0;
				$count=0;
				for ($i=1; ; $i++) { 
					if ($i%2==0) {
						continue;
					}elseif ($i%2!=0) {
						$count++;
						$sum=$sum+$i;
						if ($count==100) {
							break;
						}
					}
					echo $sum . " ";
				}
				echo "<br>";
				echo $sum;

				echo "<br>";
				echo "<br>";
				echo "<br>";

				// 1+4+8+13+19+26
				$t=1;
				$a=-1;
				$sum = 0;
				for ($i=1; $i<=6 ; $i++) { 
					$t++;
					$a=$a+$t;
					$sum = $sum+$a;
				}
				echo $sum;


				echo "<br>";
				echo "<br>";
				echo "<br>";



				// 1+3+5+7+11+13+17+19+23+29
				$count=0;
				for ($i=1; ; $i++) { 
					if ($count==10) {
						break;
					}
					if ($i%2==0) {
						continue;
					}else{
						if ($i==1) {
							$count++;
							echo $i . " ";
						}else{
							$not=0;
							for ($j=2;$j<=$i-1;$j++) { 
								if ($i%$j==0) {
									$not=1;
									break;
								}
								if ($not==0) {
										$count++;
										echo $i . " ";
									}	
							}
						}
					}
				}





				echo "<br>";
				echo "<br>";
				echo "<br>";

				for ($i=1; $i <=30 ; $i++) { 
					if ($i>10) {
						echo $i . ":";
						for ($j=0; $j<5 ; $j++) { 
							echo $j . " ";
						}
						echo "<br>";
					}
				}


				echo "<br>";
				echo "<br>";
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

				function add($a,$b){
					$c = $a + $b;
					return $c;
				}
				echo add(10,10);



				echo "<br>";
				echo "<br>";
				echo "<br>";


				function cut($c,$d){
					$e = $c - $d;
					return $e;
				}
				echo cut(100,10);

				echo "<br>";
				echo "<br>";
				echo "<br>";

				/*
				$num = 2;
				while($num < 200){
					$counter = 0;
					for($i = 1; $i <= $num; $i++){
						if($num % $i == 0){
						$counter++;
					}
				}
					if($counter < 3){
						echo $num." , ";
					}
				$num++;
				}

				echo "<br>";
				echo "<br>";
				echo "<br>";

				$num = 2;
				while ($num < 200) {
					$count = 0;
					for ($i=0; $i <= $num ; $i++) { 
						
					}
					$num++;
					//echo $num."<br>";
				}
				*/
				echo "<br>";
				echo "<br>";
				echo "<br>";

				/*
					1
					1 1 
					1 1 1
					1 1 1 1

				*/

					for ($i=1; $i<=4 ; $i++) { 
						for ($j=1; $j<=$i ; $j++) { 
							echo "1 ";
						}
						echo "<br>";
					}
					

					echo "<br>";
					echo "<br>";
					echo "<br>";
























































































		?>

		<a href="test.php?msg=I Love You&txt=Very Much">Go to herself</a>



































































		</section>

















		<section class="footer">
			<p><?php echo "www.taiyobs side.com";?></p>
		</section>
	</div>
</body>
</html>
