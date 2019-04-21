<?php
	include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View page</title>
</head>
<body>
	<h2>Show all data</h2>

	<?php
		//if(isset($error_message)){echo $error_message;}
		//if(isset($success_message)){echo $success_message;}
	?>

	
		<table border="1" cellspacing="0" cellpadding="50">
			<tr>
				<th>Serial</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Age</th>
				<th>Email</th>
				<th>Action</th>
			</tr>

			<?php
				$i=0;
				$result = mysqli_query($conn,"select * from tbl_st");
				while ($row = mysqli_fetch_array($result)) {
					$i++;
			?>		
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row['st_name'];?></td>
						<td><?php echo $row['st_roll'];?></td>
						<td><?php echo $row['st_age'];?></td>
						<td><?php echo $row['st_email'];?></td>
						<td><a href="update.php?id=<?php echo $row['st_id'];?>">Edit</a></td>
					</tr>
			<?php		
				}
			?>

			
		</table>

		<br/>
	

	<a href="index.php">GO BACK</a>

	
	
</body>
</html>