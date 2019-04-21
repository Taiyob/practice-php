<?php include ('header.php');?>


		<section class="content">
		<div class="cont">
			<hr/>
				Get data From a data table.
			<hr/>

			<?php
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$gender = $_POST['gender'];
					$dep = $_POST['dep'];
					$code = $_POST['code'];
				
			?>

			<table class="tbone">
				<tr>
					<td colspan="2" align="center">Output</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $name;?></td>
				</tr>
				<tr>
					<td>Gender</td>
					
						<?php
							if ($gender == 'Male') 
								{ 
						?>
									<td><?php echo $gender;?></td>
						<?php 	}
						?>

						<?php
							if ($gender == 'Female') 
								{ 
						?>
									<td><?php echo $gender;?></td>
						<?php 	} 
						?>

					
				</tr>
				<tr>
					<td>Depertment</td>
						<?php
							if ($dep == 'CSE') 
									{ 
						?>
									<td><?php echo $dep;?></td>
						<?php 	}
						?>
						<?php
							if ($dep == 'EEE') 
									{ 
						?>
									<td><?php echo $dep;?></td>
						<?php 	}
						?>
						<?php
							if ($dep == 'ITE') 
									{ 
						?>
									<td><?php echo $dep;?></td>
						<?php 	}
						?>
				</tr>
				<tr>
					<td>Coder</td>
					<?php
						if ($code == 'PHP') 
						{ 
					?>
							<td><?php echo $code;?></td>
					<?php 	}
					?>
					<?php
						if ($code == 'JAVA') 
						{ 
					?>
							<td><?php echo $code;?></td>
					<?php 	}
					?>
					<?php
						if ($code == 'C#') 
						{ 
					?>
							<td><?php echo $code;?></td>
					<?php 	}
					?>

				</tr>
			</table>


		<?php } ?>

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST' id='myform'>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
						</td>
					</tr>
					<tr>
						<td>Depertment</td>
						<td>
							<input type="checkbox" name="dep" value="CSE">CSE
							<input type="checkbox" name="dep" value="EEE">EEE
							<input type="checkbox" name="dep" value="ITE">ITE
						</td>
					</tr>
					<tr>
						<td>Coder</td>
						<td>
							<select name="code" id="code_name">
								<option value="">SELECT ONE</option>
								<option value="PHP">PHP</option>
								<option value="JAVA">JAVA</option>
								<option value="C#">C#</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="submit">
							<input type="reset" name="reset" value="clear">
						</td>
					</tr>
				</table>
			</form>	
		</div>

		</section>


<?php include ('footer.php');?>		