<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Data</title>

	<script>
		function confirm_delete(){
			return confirm('Are you sure want to delete this data');
		}
	</script>
</head>
<body>
	<h2>View Your Information</h2>

	<table border="1" cellspacing="0" cellpadding="5">
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
			$save = mysqli_query($conn , "select * from tbl_st");
			while($row = mysqli_fetch_array($save)) {
				$i++;
		?>		
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['st_name'];?></td>
					<td><?php echo $row['st_roll'];?></td>
					<td><?php echo $row['st_age'];?></td>
					<td><?php echo $row['st_email'];?></td>
					<td>
						<a href="update.php?id=<?php echo $row['st_id'];?>">Edit</a>&nbsp;|&nbsp;
						<a onclick="return confirm_delete();"
						 href="delete.php?id=<?php echo $row['st_id'];?>">Delete</a>
					</td>
				</tr>
					
		<?php		
			}
		?>
		
	</table>

	<a href="connect.php">GO BACK</a>



	
</body>
</html>