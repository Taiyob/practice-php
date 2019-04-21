<?php
	//if(!preg_match("/^(Mr|Mrs|Dr|Md)\.\ /", $u_name)) Full name
	//if(!(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $u_email))) Email
	//if(!(preg_match("/^[A-Za-z][A-Za-z0-9]{5,21}$/", $u_username))) User Name


	/*
	$word = "sdkjdkjhjkd";
	$u = "I have a ball";

	echo substr_count($word, "h");
	echo "<br>";
	echo substr_count($word, "j");
	echo "<br>";
	echo strlen($word);
	echo "<br>";
	echo strpos($word, "h");
	*/
?>


<?php
$var1 = "Hello";
$var2 = "hello";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}
?>
