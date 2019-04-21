<?php
/*
	$massage = $_GET['msg'];
	$word = $_GET['txt'];

	echo $massage. "<br>";
	echo $word;			*/
?>

<?php
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



					/*
						1
						1 2
						1 2 3
						1 2 3 4

					*/

						for ($i=1; $i<=4 ; $i++) { 
						for ($j=1; $j<=$i ; $j++) { 
							echo $j." ";
						}
						echo "<br>";
					}

					echo "<br>";
					echo "<br>";
					echo "<br>";

					/*
						1
						2 2 
						3 3 3
						4 4 4 4 

					*/


						for ($i=1; $i<=4 ; $i++) { 
						for ($j=1; $j<=$i ; $j++) { 
							echo $i." ";
						}
						echo "<br>";
					}


					echo "<br>";
					echo "<br>";
					echo "<br>";


					/*
						1 1 1 1 
						1 1 1
						1 1 
						1 

					*/

						for ($i=1; $i<=4 ; $i++) { 
						for ($j=4; $j>=$i ; $j--) { 
							echo "1 ";
						}
						echo "<br>";
					}



					echo "<br>";
					echo "<br>";
					echo "<br>";




					/*
					1
					2 1
					3 2 1
					4 3 2 1	




					1 1 1 1 
					2 2 2 
					3 3 
					4 			

					*/



					for ($i=1; $i<=4 ; $i++) {
						for ($j=$i; $j>=1 ; $j--) { 
							echo $j." ";
						}
						echo "<br>";
					}



					echo "<br>";
					echo "<br>";
					echo "<br>";

					/*
									1
						      	2 	1
						   	3 	2 	1
						4 	3 	2 	1
					*/
					

						for ($i=1; $i<=4 ; $i++) {
							for ($k=3; $k>=$i ; $k--) { 
							 	echo "&nbsp;&nbsp;&nbsp;";
							 } 
							for ($j=$i; $j>=1 ; $j--) { 
								echo $j." ";
							}
							echo "<br>";
						} 



						echo "<br>";
						echo "<br>";
						echo "<br>";

						/*
											1
							      		 2 	1 2
							   		  3  2 	1 2 3
									4 3  2 	1 2 3 4

						*/


						for ($i=1; $i<=4 ; $i++) {
							for ($k=3; $k>=$i ; $k--) { 
							 	echo "&nbsp;&nbsp;&nbsp;";
							 } 
							for ($j=$i; $j>=1 ; $j--) { 
								echo $j." ";
							}
							for ($m=2; $m<=$i ; $m++) { 
								echo $m." ";
							}
							echo "<br>";
						} 





















?>