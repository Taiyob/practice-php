<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	array_change_key_case
	<br/>
	<?php
		$case = array(
			"Himel"=>"25",
			"Nadim"=>"30",
			"Rahul"=>"55"
		);
		print "<pre>";
		print_r (array_change_key_case($case,CASE_UPPER));
		print "</pre>";
	?>
	<br/>
	<?php
		$case1 = array(
			"Himel"=>"25",
			"Nadim"=>"30",
			"Rahul"=>"55"
		);
		print "<pre>";
		print_r (array_change_key_case($case1,CASE_LOWER));
		print "</pre>";
	?>

	<br/>
	array_column
	<br/>

	<?php
		$col = array(
			array(
				'id'=>'201',
				'first_name'=>'MD',
				'last_name'=>'OLI'
			),
			array(
				'id'=>'202',
				'first_name'=>'NUSRAT',
				'last_name'=>'YASMIN'
			),
			array(
				'id'=>'203',
				'first_name'=>'MINHAZ',
				'last_name'=>'UDDIN'
			)
		);

		$last_name = array_column($col, 'last_name','id');

		print "<pre>";
		print_r ($last_name);
		print "</pre>";

		echo "<br>";


		$fast_name = array_column($col, 'first_name','id');

		print "<pre>";
		print_r ($fast_name);
		print "</pre>";

		echo "<br>";


		$id = array_column($col, 'id');

		print "<pre>";
		print_r ($id);
		print "</pre>";
	?>

	<br/>
	array_combine
	<br/>
	
	<?php
		$name = array("Oli","Ali","Anik");
		$dep = array("CSE","TEXTILE","BBA");

		$combine = array_combine($name, $dep);

		print "<pre>";
		print_r ($combine);
		print "</pre>";
	?>

	<br/>
	array_count_values
	<br/>

	<?php
		$man = array('prince','tonmoy','sakil','prince','sakil','tonmoy','prince','noman','antor','prince','sakil','tonmoy','sakil','sakil','tonmoy');
		$age = array('25','20','22','25','26','21','22','20','22','25','22','26','25','20',);

		$count = array_count_values($man);
		$count1 = array_count_values($age);

		print "<pre>";
		print_r ($count);
		print "</pre>";

		print "<pre>";
		print_r ($count1);
		print "</pre>";
	?>

	<br/>
	array_diff
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'a'=>'red',
			'b'=>'black',
			'c'=>'white',
			'd'=>'blue'
		);

		$dif = array_diff($array_one, $array_two);

		print "<pre>";
		print_r ($dif);
		print "</pre>";
	?>

	<br/>
	array_diff_assoc
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'd'=>'red',
			'e'=>'black',
			'f'=>'white',
			'g'=>'blue'
		);

		$assoc = array_diff_assoc($array_one, $array_two);

		print "<pre>";
		print_r ($assoc);
		print "</pre>";
	?>

	<br/>
	array_diff_key
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'd'=>'red',
			'e'=>'black',
			'f'=>'white',
			'g'=>'blue'
		);

		$key = array_diff_key($array_one, $array_two);

		print "<pre>";
		print_r ($key);
		print "</pre>";
	?>

	<br/>
	array_intersect
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'd'=>'red',
			'e'=>'black',
			'f'=>'white',
			'g'=>'blue'
		);

		$match = array_intersect($array_one, $array_two);

		print "<pre>";
		print_r ($match);
		print "</pre>";
	?>

	<br/>
	array_intersect_assoc
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'a'=>'red',
			'e'=>'black',
			'c'=>'white',
			'g'=>'blue'
		);

		$all_match = array_intersect_assoc($array_one, $array_two);

		print "<pre>";
		print_r ($all_match);
		print "</pre>";
	?>

	<br/>
	array_intersect_key
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white'
		);
		$array_two = array(
			'a'=>'red',
			'e'=>'black',
			'c'=>'purple',
			'g'=>'blue'
		);

		$key_match = array_intersect_key($array_one, $array_two);

		print "<pre>";
		print_r ($key_match);
		print "</pre>";
	?>

	<br/>
	array_key_exists
	<br/>

	<?php
		$arr = array(
			'Name' => 'Islam',
			'Roll' => '1'
		);
		if (array_key_exists('Name', $arr)) {
			echo "Exists";
		}else{
			echo "Not Exists";
		}
	?>
	<br/>

	<?php
		$arr = array('name','age');
		if (array_key_exists(1, $arr)) {
			echo " Age Exists";
		}else{
			echo "Not Exists";
		}
	?>

	<br/>
	array_keys
	<br/>

	<?php
		$car = array(
			'volvo'=>'2000',
			'bmw'=>'500',
			'toyota'=>'333'
		);
		$val = array_keys($car);

		print "<pre>";
		print_r ($val);
		print "</pre>";
	?>
	<br/>

	<?php
		$car = array(
			'volvo'=>'2000',
			'bmw'=>'500',
			'toyota'=>'333'
		);
		$val1 = array_keys($car,'333');

		print "<pre>";
		print_r ($val1);
		print "</pre>";
	?>

	<br/>
	array_map
	<br/>

	<?php
		function myfunction($value){
			return ($value+$value);
		}
		$map = array(1,2,3,4,5);
		$result = array_map('myfunction', $map);

		print "<pre>";
		print_r ($result);
		print "</pre>";	
	?>
	<br/>

	<?php
		function myfunctions($value){
			$v = strtoupper($value);
			return $v;
		}
		$map = array(
			'Animal'=>'cow',
			'Family'=>'mamalia'
		);
		$result = array_map('myfunctions', $map);

		print "<pre>";
		print_r ($result);
		print "</pre>";	
	?>

	<br/>
	array_marge
	<br/>
	
	<?php
		$name = array("Oli","Ali","Anik");
		$dep = array("CSE","TEXTILE","BBA");

		$merge = array_merge($name, $dep);

		print "<pre>";
		print_r ($merge);
		print "</pre>";
	?>
	<br/>
	
	<?php
		$name = array("Oli"=>"1","Ali"=>"2","Anik"=>"3");
		$dep = array("Oli"=>"1","Ali"=>"10","Anik"=>"8");

		$merge = array_merge($name, $dep);

		print "<pre>";
		print_r ($merge);
		print "</pre>";
	?>

	<br/>
	array_multisort -PROBLEM
	<br/>

	<?php
		$multi = array("Oli","Ali","Anik");

		array_multisort($multi);

		print "<pre>";
		print_r ($multi);
		print "</pre>";
	?>
	<br/>

	<?php
		$multi = array("Oli","Ali","Anik");
		$short = array("CSE","TEXTILE","BBA");
		array_multisort($multi,SORT_ASC, $short,SORT_ASC);

		print "<pre>";
		print_r ($multi);
		print "</pre>";

		print "<pre>";
		print_r ($short);
		print "</pre>";
	?>

	<br/>
	array_pad
	<br/>

	<?php
		$col = array('red','blue','green');
		$pad = array_pad($col,-5, 'sky');


		print "<pre>";
		print_r ($pad);
		print "</pre>";
	?>

	<br/>
	array_pop and array_push
	<br/>

	<?php
		$pop = array('red','blue','green');
		$push = array("CSE","TEXTILE","BBA");

			array_pop($pop);
			array_push($push, 'EEE','CIVIL');


		print "<pre>";
		print_r ($pop);
		print "</pre>";

		print "<pre>";
		print_r ($push);
		print "</pre>";
	?>

	<br/>
	array_peoduct
	<br/>

	<?php
		$product = array(5,8,3,2);
		echo (array_product($product));
	?>

	<br/>
	array_replace
	<br/>

	<?php
		$replace = array('red','blue','green');
		$preplace = array("CSE","TEXTILE","BBA");

		$re = array_replace($replace, $preplace);

		print "<pre>";
		print_r ($re);
		print "</pre>";
	?>
	<br/>

	<?php
		$replace = array('a'=>'red','b'=>'blue','c'=>'green');
		$preplace = array('a'=>"CSE",'b'=>"TEXTILE","BBA");

		$re = array_replace($replace, $preplace);

		print "<pre>";
		print_r ($re);
		print "</pre>";
	?>

	<br/>
	array_reverse
	<br/>

	<?php
		$reverse = array('a'=>'red','b'=>'blue','c'=>'green');
		
		print "<pre>";
		print_r ($replace);
		print "</pre>";

		$re = array_reverse($reverse);

		print "<pre>";
		print_r ($re);
		print "</pre>";
	?>

	<br/>
	array_search
	<br/>

	<?php
		$search = array('a'=>'red','b'=>'blue','c'=>'green');
		if (isset($_POST['name'])) {
			global $txt;
			$txt = $_POST['name'];
			array_search($txt, $search);
			echo "Login";
		}
	?>
	<form action="" method="post">
		<input type="text" name="name" value="<?php global $txt; echo $txt;?>">
		<input type="submit" value="Done">
	</form>

	<br/>
	array_shift
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'e'=>'black',
			'c'=>'purple',
			'g'=>'blue'
		);
		$shift = array_shift($array_one);

		print "<pre>";
		print_r ($shift);
		print "</pre>";

		print "<pre>";
		print_r ($array_one);
		print "</pre>";
	?>

	<br/>
	array_slice
	<br/>

	<?php
		$slice = array('a'=>'red','b'=>'blue','c'=>'green','d'=>'blue','e'=>'red');

		$result = array_slice($slice, '1',3);

		print "<pre>";
		print_r ($result);
		print "</pre>";
	?>

	<br/>
	array_sum
	<br/>

	<?php
		$sum = array(76,89,43);
		$add = array_sum($sum);

		print "<pre>";
		print_r ($add);
		print "</pre>";
	?>

	<br/>
	array_unique
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white',
			'd'=>'red',
			'e'=>'black',
			'f'=>'white',
			'g'=>'blue'
		);

		$unique = array_unique($array_one);

		print "<pre>";
		print_r ($unique);
		print "</pre>";
	?>

	<br/>
	array_unshift
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white',
			'd'=>'red'
		);

		print "<pre>";
		print_r ($array_one);
		print "</pre>";
	

		$unshift = array_unshift($array_one, 'black');

		print "<pre>";
		print_r ($unshift);
		print "</pre>";

		print "<pre>";
		print_r ($array_one);
		print "</pre>";
	?>

	<br/>
	array_values
	<br/>

	<?php
		$array_one = array(
			'a'=>'red',
			'b'=>'green',
			'c'=>'white',
			'd'=>'red',
			'e'=>'black',
			'f'=>'white',
			'g'=>'blue'
		);

		$value = array_values($array_one);

		print "<pre>";
		print_r ($value);
		print "</pre>";
	?>

	<br/>
	array_walk
	<br/>
	
	<?php
		function walk($name,$depertment){
			echo "$depertment is $name depertment<br>";
		}
		$walks = array(
			'OLI'=>'CSE',
			'ALI'=>'TEXTILE',
			'ANIK'=>'BBA'
		);
		 array_walk($walks, "walk");
	?>

	<br/>
	arsort and asort
	<br/>

	<?php
		$sort = array(
			'Ali'=>'26',
			'Oli'=>'25',
			'Anik'=>'27',
			'Rofi'=>'28'
		);
		arsort($sort);
		foreach ($sort as $key => $value) {
			echo "$key is $value<br>";
		}
	?>
	<br/>

	<?php
		$sort = array(
			'Ali'=>'26',
			'Oli'=>'25',
			'Anik'=>'27',
			'Rofi'=>'28'
		);
		asort($sort);
		foreach ($sort as $key => $value) {
			echo "$key is $value<br>";
		}
	?>

	<br/>
	compact
	<br/>

	<?php
		$name = "Taiyob";
		$dep = "CSE";
		$coder = "PHP";

		$result = compact("name","dep","coder");

		print "<pre>";
		print_r ($result);
		print "</pre>";
	?>

	<br/>
	current
	<br/>

	<?php
		$current = array('a'=>'red','b'=>'blue','c'=>'green','d'=>'yellow','e'=>'black');
		echo current($current)."<br>";
		echo next($current)."<br>";
		echo prev($current)."<br>";
		echo end($current)."<br>";
	?>
	<br/>
	in_array
	<br/>

	<?php
		$coder = array("Oli","Ali","Anik");
		if (isset($_POST['name'])) {
			$text = $_POST['name'];
			if (in_array($text, $coder)) {
				echo "success";
			}else{
				echo "wrong";
			}
		}
	?>
	<form action="" method="post">
		<input type="text" name="name">
		<input type="submit" value="submit">
	</form>

	<br/>
	key/krsort/ksort
	<br/>

	<?php
		$sort = array(
			'Ali'=>'26',
			'Oli'=>'25',
			'Anik'=>'27',
			'Rofi'=>'28'
		);
		echo key($sort);
	?>
	<br/>

	<?php
		$sort = array(
			'Ali'=>'26',
			'Oli'=>'25',
			'Anik'=>'27',
			'Rofi'=>'28'
		);
		krsort($sort);
		foreach ($sort as $key => $value) {
			echo $key . ' is ' . $value . "<br>";
		}
	?>
	<br/>

	<?php
		$sort = array(
			'Ali'=>'26',
			'Oli'=>'25',
			'Anik'=>'27',
			'Rofi'=>'28'
		);
		ksort($sort);
		foreach ($sort as $key => $value) {
			echo $key . ' is ' . $value . "<br>";
		}
	?>

	<br/>
	shuffle
	<br/>

	<?php
		$current = array('red','blue','green','yellow','black');


		print "<pre>";
		print_r ($current);
		print "</pre>";

		 shuffle($current);

		print "<pre>";
		print_r ($current);
		print "</pre>";
	?>
</body>
</html>