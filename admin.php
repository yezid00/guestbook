<?php 
require_once('db.php');


if(isset($_GET['delete'])){
	$id = $_GET['delete'];

	$sql = "DELETE FROM `entries` WHERE id = '$id'";
	$result = $conn->query($sql);


	// if ($result) {
	// 	$message = 'Record deleted';
	// 	header("location:admin.php".$message);
	// }
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

	<div class="container">
		<button class="btn-back"> <a href="index.php">Back</a></button>
		<?php 
		$sql = "SELECT * FROM entries"; 
		$result = $conn->query($sql);
		
	?>
			
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
					<th colspan="1">Action</th>
				</tr>
			</thead>

		<?php while ($row = $result->fetch_assoc()):?>
			<tr>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['subject']; ?></td>
				<td><?php echo $row['message']; ?></td>
				<td>
					<button class="btn-delete"><a href="admin.php?delete=<?php echo $row['id']?>" >Delete</a></button>

				</td>
			</tr>
		<?php endwhile; ?>
		</table>
	

	<?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}

	?>

	
	</div>
</body>
</html>